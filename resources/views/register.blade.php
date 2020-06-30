<!DOCTYPE html>
<head>
    <title>Buat account baru</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="welcome">
        <label for="fname">First Name:</label><br><br>
        <input type="text" id="fname"><br><br>
        <label for="lname">Last Name:</label><br><br>
        <input type="text" id="lname"><br><br>
        <label for="gender">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label for="nationality">Nationality:</label><br><br>
        <select id="nationality" name="nationality">
            <option value="Indonesian" selected>Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select><br><br>
        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" id="indonesia" name="language" value="indonesia">
        <label for="indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="language" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" id="other" name="other" value="other">
        <label for="english">Other</label><br><br>
        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" rows="10" cols="30"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
    

</body>