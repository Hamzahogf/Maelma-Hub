import smtplib
import sys
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

# Get email and code from command line arguments
recipient_email = sys.argv[1]
verification_code = sys.argv[2]

sender_email = "hamza.faiz.ahmedfouatih@ensia.edu.dz"
sender_password = "cvhq schw qfcg qbux"
smtp_server = "smtp.gmail.com"
smtp_port = 587

subject = "Your Verification Code"
body = f"Your verification code is: {verification_code}"

msg = MIMEMultipart()
msg['From'] = sender_email
msg['To'] = recipient_email
msg['Subject'] = subject
msg.attach(MIMEText(body, 'plain'))

try:
    server = smtplib.SMTP(smtp_server, smtp_port)
    server.starttls()
    server.login(sender_email, sender_password)
    text = msg.as_string()
    server.sendmail(sender_email, recipient_email, text)
    server.quit()
    print("Email sent successfully")
except Exception as e:
    print(f"Failed to send email: {str(e)}")