<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use App\Traits\LogsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MessageController extends Controller
{
    use LogsActivity;

    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view("admin.message", compact("messages"));
    }

    public function store(StoreMessageRequest $request)
    {
        $validated = $request->validated();

        Message::create($validated);
        return redirect()->route('contact')->with("success", "Message envoyé avec succès !");
    }

    public function show(string $id)
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view("admin.message", compact('messages'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'status' => 'required|integer|in:0,1',
        ]);

        $message = Message::findOrFail($id);
        $message->update($validated);
        Cache::forget('total_unread_messages');
        $this->logAction('update', $message, 'Changement de statut du message de : ' . $message->nom);

        return redirect()->route('message')->with("success", "Statut du message modifié avec succès");
    }

    public function destroy(string $id)
    {
        $message = Message::findOrFail($id);
        $this->logAction('delete', $message, 'Suppression du message de : ' . $message->nom);
        $message->delete();
        Cache::forget('total_unread_messages');

        return redirect()->route('message')->with("success", "Message supprimé avec succès");
    }
}
