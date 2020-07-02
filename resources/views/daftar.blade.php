<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
    </head>

    <body>
        <h1>Buat Account Baru!<h1>
        <h2>Sign Up Form</h2>

        <form action="/selamatdatang" method="GET">
            @csrf 
            <label for="firstname">First name : </label><br><br>
            <input type="text" id="firstname" name="firstname"><br><br>

            <label for="lastname">Last name : </label><br><br>
            <input type="text" id="lastname" name="lastname"><br><br>

            <label>Gender : </label><br><br>
            <input type="radio" name="gender">Male <br>
            <input type="radio" name="gender">Female <br>
            <input type="radio" name="gender">Other <br><br>

            <label>Nationality : </label><br><br>
            <select name="nationality">
                <option value="indonesian">Indonesian</option>
                <option value="singapore">Singapura</option>
                <option value="malaysia">Malaysia</option>
                <option value="brunei darussalam">Brunei Darussalam</option>
            </select><br><br>

            <label>Language Spoken : </label><br><br>
            <input type="checkbox" name="language"> Bahasa Indonesia <br>
            <input type="checkbox" name="language"> English <br>
            <input type="checkbox" name="language"> Other <br><br>

            <label for="bio">Bio : </label><br><br>
            <textarea id="bio" cols="30" rows="10"></textarea><br>

            <a href="/selamatdatang" ><input type="button" value="Submit"></a>


        </form>


    </body>
</html>