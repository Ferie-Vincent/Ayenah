<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Aperçu – Confirmation d'inscription AYENAH</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; line-height: 1.6; color: #1a1a1a; background: linear-gradient(135deg, #f8fdf8 0%, #ffffff 50%, #f0f9f0 100%); min-height: 100vh; padding: 20px; }
    .email-container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 16px; box-shadow: 0 20px 40px -10px rgba(106, 151, 85, 0.2); overflow: hidden; border: 1px solid rgba(106, 151, 85, 0.1); }
    .header { background: linear-gradient(135deg, #6a9755 0%, #8bb369 50%, #6a9755 100%); padding: 40px 30px; text-align: center; position: relative; }
    .header::before { content: ''; position: absolute; inset: 0; background: rgba(0, 0, 0, 0.1); }
    .header-content { position: relative; z-index: 10; }
    .logo { height: 60px; margin-bottom: 20px; }
    .header h1 { color: white; font-size: 32px; font-weight: bold; margin-bottom: 12px; }
    .header-divider { width: 60px; height: 4px; background: rgba(255, 255, 255, 0.8); margin: 0 auto; border-radius: 2px; }
    .content { padding: 40px 30px; }
    .greeting { text-align: center; margin-bottom: 30px; }
    .greeting p { font-size: 18px; color: #1a1a1a; }
    .name-highlight { color: #6a9755; font-weight: 600; }
    .thank-you-card { background: linear-gradient(135deg, rgba(248, 253, 248, 0.8) 0%, rgba(240, 249, 240, 0.6) 100%); border-radius: 12px; padding: 25px; margin-bottom: 25px; border: 1px solid rgba(106, 151, 85, 0.2); }
    .reference-badge { display: inline-flex; align-items: center; background: rgba(106, 151, 85, 0.1); color: #6a9755; font-weight: 600; font-size: 14px; padding: 6px 12px; border-radius: 20px; margin-left: 8px; }
    .project-details { background: #ffffff; border: 1px solid rgba(106, 151, 85, 0.2); border-radius: 12px; padding: 25px; margin-bottom: 25px; box-shadow: 0 4px 15px rgba(106, 151, 85, 0.1); }
    .project-details h3 { color: #6a9755; font-size: 18px; font-weight: 600; margin-bottom: 20px; display: flex; align-items: center; }
    .bullet-point { width: 8px; height: 8px; background: #6a9755; border-radius: 50%; margin-right: 12px; }
    .details-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .detail-item { display: flex; flex-direction: column; }
    .detail-label { font-size: 14px; color: #6b7280; font-weight: 500; margin-bottom: 6px; }
    .detail-value { font-weight: 600; color: #1a1a1a; }
    .amount { font-size: 24px; font-weight: bold; color: #6a9755; }
    .documents-section { background: linear-gradient(135deg, rgba(139, 179, 105, 0.05) 0%, rgba(106, 151, 85, 0.05) 100%); border-radius: 12px; padding: 25px; margin-bottom: 25px; border: 1px solid rgba(139, 179, 105, 0.2); }
    .documents-section h3 { font-size: 18px; font-weight: 600; color: #1a1a1a; margin-bottom: 15px; }
    .document-list { margin-top: 20px; }
    .document-item { display: flex; align-items: center; background: rgba(255, 255, 255, 0.7); border-radius: 8px; padding: 15px; margin-bottom: 12px; border: 1px solid rgba(106, 151, 85, 0.15); }
    .document-icon { width: 32px; height: 32px; background: rgba(106, 151, 85, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0; }
    .document-icon svg { width: 16px; height: 16px; color: #6a9755; }
    .document-name { font-weight: 500; color: #1a1a1a; }
    .important-notice { background: linear-gradient(135deg, rgba(239, 68, 68, 0.05) 0%, rgba(139, 179, 105, 0.05) 50%, rgba(106, 151, 85, 0.05) 100%); border-left: 4px solid #6a9755; border-radius: 12px; padding: 25px; margin-bottom: 30px; }
    .notice-content { display: flex; align-items: flex-start; }
    .notice-icon { width: 24px; height: 24px; background: #6a9755; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0; margin-top: 2px; }
    .notice-icon svg { width: 12px; height: 12px; color: white; }
    .notice-text { flex: 1; }
    .notice-title { font-weight: 600; color: #1a1a1a; margin-bottom: 8px; }
    .contact-section { text-align: center; margin: 30px 0; }
    .contact-button { display: inline-flex; align-items: center; background: linear-gradient(135deg, #6a9755 0%, #8bb369 100%); color: white; text-decoration: none; padding: 16px 32px; border-radius: 30px; font-weight: 600; font-size: 18px; box-shadow: 0 8px 25px rgba(106, 151, 85, 0.3); transition: transform 0.2s ease; }
    .contact-button:hover { transform: translateY(-2px); box-shadow: 0 12px 35px rgba(106, 151, 85, 0.4); }
    .contact-button svg { width: 20px; height: 20px; margin-right: 12px; }
    .closing { text-align: center; padding-top: 25px; border-top: 1px solid rgba(106, 151, 85, 0.2); }
    .closing p { margin-bottom: 15px; color: #1a1a1a; }
    .signature { font-weight: 500; color: #1a1a1a; }
    .team-name { font-weight: bold; color: #6a9755; }
    .partners-section { background: #f9fafb; padding: 20px; text-align: center; border-top: 1px solid rgba(106, 151, 85, 0.2); border-bottom: 1px solid rgba(106, 151, 85, 0.2); }
    .partners-logos img { max-width: 100%; height: auto; }
    .footer { background: linear-gradient(135deg, rgba(248, 253, 248, 0.8) 0%, rgba(240, 249, 240, 0.6) 100%); padding: 25px 30px; text-align: center; border-top: 1px solid rgba(106, 151, 85, 0.2); }
    .footer p { font-size: 14px; color: #6b7280; margin-bottom: 12px; }
    .footer-info { display: flex; justify-content: center; align-items: center; font-size: 12px; color: #6b7280; gap: 15px; }
    @media (max-width: 600px) { .email-container { margin: 10px; border-radius: 12px; } .header { padding: 30px 20px; } .content { padding: 25px 20px; } .details-grid { grid-template-columns: 1fr; gap: 15px; } .contact-button { padding: 14px 24px; font-size: 16px; } .footer-info { flex-direction: column; gap: 8px; } }
  </style>
</head>
<body>
  <div class="email-container">
    <!-- Header -->
    <div class="header">
      <div class="header-content">
        <h1 style="color: white; font-size: 70px; font-weight: bold;">AYENAH</h1>
        <h1>Félicitations !</h1>
        <div class="header-divider"></div>
      </div>
    </div>

    <!-- Content -->
    <div class="content">
      <div class="greeting">
        <p>Bonjour <span class="name-highlight">{{ $enregistrement->firstname }} {{ $enregistrement->lastname }}</span>,</p>
      </div>
      <div class="thank-you-card">
        <p>Nous vous remercions pour votre inscription au projet AYENAH. Votre demande a bien été enregistrée.
        </p>
      </div>
      <div class="project-details">
        <h3>
          <div class="bullet-point"></div>
          Détails de votre projet
        </h3>
        <div class="details-grid">
          <div class="detail-item">
            <div class="detail-label">Projet</div>
            <div class="detail-value">{{ $enregistrement->project_name }}</div>
          </div>
          <div class="detail-item">
            <div class="detail-label">Montant</div>
            <div class="detail-value amount"> <span class="reference-badge amount">{{ number_format($enregistrement->amount, 0, ',', ' ') }} FCFA</span></div>
          </div>
        </div>
      </div>
      <div class="documents-section">
        <h3>Documents à télécharger</h3>
        <p>Vous trouverez en pièces jointes à cet email les documents nécessaires pour poursuivre votre candidature :</p>
        <div class="document-list">
          <div class="document-item">
            <div class="document-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            </div>
            <div class="document-name">Fiche d'instruction</div>
          </div>
          <div class="document-item">
            <div class="document-icon">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            </div>
            <div class="document-name">Fiche technique</div>
          </div>
        </div>
      </div>
      <div class="important-notice">
        <div class="notice-content">
          <div class="notice-icon">
            <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
          </div>
          <div class="notice-text">
            <div class="notice-title">Important :</div>
            <p>Veuillez imprimer ces documents, les remplir soigneusement et nous les renvoyer complétés à l'adresse suivante :</p>
          </div>
        </div>
      </div>
      <div class="contact-section">
        <a href="mailto:infos@ayenah.ci" class="contact-button">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
          infos@ayenah.ci
        </a>
      </div>
      <div class="closing">
        <p>Nous examinerons votre dossier et reviendrons vers vous dans les plus brefs délais.</p>
        <div style="margin-top: 20px;">
          <p class="signature">Cordialement,</p>
          <p class="team-name">L'équipe AYENAH</p>
        </div>
      </div>
    </div>

    <!-- Partners Section -->
    <div class="partners-section">
      <div class="partners-logos">
        <img src="1.png" alt="Partenaires" />
      </div>
    </div>

    <!-- Footer -->
    <div class="footer">
      <p>Ceci est un message automatique, merci de ne pas y répondre directement.</p>
      <div class="footer-info">
        <span>© 2024 AYENAH</span>
        <span>•</span>
        <span>Côte d'Ivoire</span>
      </div>
    </div>
  </div>
</body>
</html>
