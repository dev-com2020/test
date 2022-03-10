<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rejestracja użytkownika</title>
    <script type="text/javascript">
      function sprawdz(){
        var f = document.forms.formularz1;

        if(f.nazwa.value.length < 3 || 
           f.nazwa.value.length > 20){
          alert('Nazwa musi mieć od 3 do 20 znaków!');
          return;
        }

        if(f.haslo.value.length < 6 || 
           f.haslo.value.length > 40){
          alert('Hasło musi mieć od 6 do 40 znaków!');
          return;
        }

        if(f.haslo.value != f.haslo2.value) {
          alert('Hasła różnią się od siebie!');
          return;
        }

        if(f.imie.value == "" ||
           f.nazwisko.value == "" ||
           f.email.value == ""){
           alert('Proszę wypełnić wszystkie pola formularza!');
           return;
        }
        f.submit();
      }
    </script>
  </head>
  <body>
    <h2> Wprowadź dane rejestracyjne: </h2>
    <form name = "formularz1"
          action = "add_new_user.php"
          method = "post">
      <table>
        <tr>
          <td>Nazwa użytkownika:</td>
          <td>
            <input type="text" name="nazwa">
          </td>
        </tr><tr>
          <td>Hasło:</td>
          <td>
            <input type="password" name="haslo">
          </td>
        </tr><tr>
          <td>Powtórz hasło:</td>
          <td>
            <input type="password" name="haslo2">
          </td>
        </tr><tr>
          <td>Imię:</td>
          <td>
            <input type="text" name="imie">
          </td>
        </tr><tr>
          <td>Nazwisko:</td>
          <td>
            <input type="text" name="nazwisko">
          </td>
        </tr><tr>
          <td>E-mail:</td>
          <td>
            <input type="text" name="email">
          </td>
        </tr><tr>
          <td colspan="2" style="text-align:right;">
            <input type="button" value="Rejestracja" 
                   onclick="sprawdz();">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
