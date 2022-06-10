<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Avancé - Récupération de formulaire</title>
</head>
<body>
    <h1>Les formulaires en PHP - 1. Récupération</h1>
    <section class="formSection">
        <form  action="./thanks.php"  method="POST">
            <div>
                <label  for="firstName">First Name</label>
                <input  type="text"  id="firstName"  name="userFirstName" 
                        placeholder="Enter your name" required>
            </div>
            <div>
                <label  for="lastName">Last Name</label>
                <input  type="text"  id="lastName"  name="userLastName" 
                        placeholder="Enter your name" required>
            </div>
            <div>
                <label  for="email">Email</label>
                <input  type="email"  id="email"  name="userEmail" 
                        placeholder="example@example.com" required>
            </div>
            <div>
                <label  for="phoneNumber">Phone Number</label>
                <input type="tel" name="userPhoneNumber" id="phoneNumber"
                pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}"
                       placeholder="format : 01.23.45.67.89" required>
            </div>
            <div>
                <label for="subject">Subject</label>
                <select name="userSubject" id="subject" required>
                    <option value="">Choisissez un sujet</option>
                    <option value="PHP">PHP</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Other">Autre</option>
                </select>
            </div>
            <div>
                <label  for="message">Message</label>
                <textarea  id="message"  name="userMessage" required></textarea>
            </div>
            <div  class="button">
                <button  type="submit">Send</button>
            </div>
        </form>
    </section>
</body>
</html>