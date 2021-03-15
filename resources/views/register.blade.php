<!DOCTYPE html>
<html>
    <head>
        <title>BNCC</title>
    </head>

    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>

        <form action="/welcome" method="POST">
            @csrf
            <label for="first-name">First name:</label>
            <br><br>
            <input id="first-name" name="fname" type="text">
            <br><br>
            <label for="lastName">Last name:</label>
            <br><br>
            <input id="last-name" name="lname" type="text">
            <br><br>
            <label for="gender">Gender:</label>
            <br><br>
            <input id="male-radio" name="gender" type="radio" value="male">
            <label for="male-radio">Male</label>
            <br>
            <input id="female-radio" name="gender" type="radio" value="female">
            <label for="female-radio">Female</label>
            <br>
            <input id="other-radio" name="gender" type="radio" value="other">
            <label for="other-radio">Other</label>
            <br><br>
            <label for="nationality">Nationality:</label>
            <br><br>
            <input type="text" name="nationality" list="national">
            <datalist id="national">
                <select name="national">
                    <option>Indonesian</option>
                    <option>American</option>
                    <option>Malaysian</option>
                    <option>Rusian</option>
                </select>
            </datalist>
            <br><br>
            <label for="language">Language Spoken:</label>
            <br><br>
            <input id="bahasa Indonesia-checkbox" name="language" value="Bahasa Indonesia" type="checkbox">
            <label>Bahasa Indonesia</label>
            <br>
            <input id="English-checkbox" name="language" value="English" type="checkbox">
            <label>English</label>
            <br>
            <input id="other-checkbox" name="language" value="other" type="checkbox">
            <label>Other</label>
            <br><br>
            <label>Bio:</label>
            <br><br>
            <textarea rows="10" cols="35"></textarea>
            <br>
            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>