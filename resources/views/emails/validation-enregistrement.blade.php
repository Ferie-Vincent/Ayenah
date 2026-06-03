<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Candidature validée — AYENAH</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; line-height: 1.6; color: #1a1a1a; background: #f0f9f0; padding: 20px; }
    .email-container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 16px; box-shadow: 0 20px 40px -10px rgba(106,151,85,0.2); overflow: hidden; border: 1px solid rgba(106,151,85,0.1); }
    .header { background: linear-gradient(135deg, #6a9755 0%, #8bb369 100%); padding: 40px 30px; text-align: center; }
    .header h1 { color: white; font-size: 26px; font-weight: bold; margin-bottom: 8px; }
    .header p { color: rgba(255,255,255,0.9); font-size: 15px; }
    .badge-validated { display: inline-block; background: rgba(255,255,255,0.2); color: white; border-radius: 20px; padding: 6px 16px; font-size: 13px; font-weight: 600; margin-bottom: 16px; }
    .content { padding: 40px 30px; }
    .greeting { font-size: 18px; font-weight: 600; margin-bottom: 20px; }
    .name { color: #6a9755; }
    .message-box { background: #f8fdf8; border: 1px solid rgba(106,151,85,0.2); border-radius: 12px; padding: 20px; margin-bottom: 28px; }
    .steps { margin-bottom: 32px; }
    .step { display: flex; align-items: flex-start; gap: 14px; margin-bottom: 16px; }
    .step-number { width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; flex-shrink: 0; }
    .step-done { background: #6a9755; color: white; }
    .step-current { background: #1e3a5f; color: white; }
    .step-next { background: #e2e8f0; color: #64748b; }
    .step-content h4 { font-size: 14px; font-weight: 600; color: #1e293b; margin-bottom: 2px; }
    .step-content p { font-size: 13px; color: #64748b; }
    .info-box { background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 10px; padding: 18px 20px; margin-bottom: 24px; }
    .info-box p { font-size: 14px; color: #1e40af; margin: 0; }
    .docs-reminder { background: #fefce8; border: 1px solid #fde68a; border-radius: 10px; padding: 16px 20px; margin-bottom: 24px; font-size: 13px; color: #92400e; }
    .contact-section { text-align: center; margin: 28px 0; }
    .contact-button { display: inline-block; background: linear-gradient(135deg, #6a9755, #8bb369); color: white; text-decoration: none; padding: 14px 32px; border-radius: 30px; font-weight: 600; font-size: 15px; }
    .footer { background: #f8fdf8; padding: 24px 30px; text-align: center; border-top: 1px solid rgba(106,151,85,0.15); font-size: 12px; color: #94a3b8; }
    .footer strong { color: #6a9755; }
    .footer a { color: #6a9755; }
  </style>
</head>
<body>
<div class="email-container">

  <div class="header">
    <div class="badge-validated">✅ Candidature validée</div>
    <h1>Félicitations, {{ $enregistrement->firstname }} !</h1>
    <p>Votre dossier d'enregistrement a été examiné et validé par l'équipe AYENAH.</p>
  </div>

  <div class="content">

    <p class="greeting">Bonjour <span class="name">{{ $enregistrement->firstname }} {{ $enregistrement->lastname }}</span>,</p>

    <div class="message-box">
      <p>Votre enregistrement pour le projet <strong>« {{ $enregistrement->project_name }} »</strong> a été validé par la Cellule de Coordination de la DGIE. Votre candidature est retenue pour la suite du processus d'instruction.</p>
    </div>

    <div class="steps">
      <p style="font-size:13px;font-weight:600;color:#64748b;text-transform:uppercase;letter-spacing:.5px;margin-bottom:16px;">Votre parcours</p>

      <div class="step">
        <div class="step-number step-done">✓</div>
        <div class="step-content">
          <h4>Étape 1 — Enregistrement</h4>
          <p>Complété le {{ $enregistrement->created_at->format('d/m/Y') }}</p>
        </div>
      </div>

      <div class="step">
        <div class="step-number step-done">✓</div>
        <div class="step-content">
          <h4>Étape 2 — Validation par la Cellule de Coordination</h4>
          <p>Validé le {{ $enregistrement->validated_at->format('d/m/Y') }}</p>
        </div>
      </div>

      <div class="step">
        <div class="step-number step-current">3</div>
        <div class="step-content">
          <h4>Étape 3 — Instruction et dépôt du dossier complet</h4>
          <p>L'équipe AYENAH vous contactera pour vous guider dans la constitution de votre dossier complet</p>
        </div>
      </div>

      <div class="step">
        <div class="step-number step-next">4</div>
        <div class="step-content">
          <h4>Étape 4 — Examen par le Comité de Sélection</h4>
          <p>Après soumission, votre dossier sera évalué par le Comité</p>
        </div>
      </div>
    </div>

    <div class="info-box">
      <p>📋 <strong>Prochaine étape :</strong> Un membre de la Cellule de Coordination vous contactera prochainement par email ou par téléphone pour vous communiquer les instructions relatives au dépôt de votre dossier complet.</p>
    </div>

    <div class="docs-reminder">
      📎 <strong>Rappel :</strong> Les fiches AYENAH (fiche d'instruction et fiche technique) vous ont été transmises en pièce jointe lors de votre email de confirmation d'inscription. Prenez-en connaissance dès maintenant pour préparer votre dossier.
    </div>

    <div class="contact-section">
      <p style="font-size:14px;color:#64748b;margin-bottom:16px;">Une question ? Contactez l'équipe AYENAH</p>
      <a href="mailto:infos@ayenah.ci" class="contact-button">infos@ayenah.ci</a>
    </div>

  </div>

  <div class="footer">
    <p>Envoyé par <strong>l'équipe AYENAH</strong> — Programme de mobilisation de la diaspora ivoirienne</p>
    <p style="margin-top:6px;">Direction Générale des Ivoiriens de l'Extérieur (DGIE)</p>
  </div>

</div>
</body>
</html>
