<html>
<body>
<form action="rezerwacje.php" method="POST">
    Ilość osób:
    <select name="number_of_people" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br>

    Imię: <input type="text" name="first_name" required><br>
    Nazwisko: <input type="text" name="last_name" required><br>
    Adres: <input type="text" name="address" required><br>
    Dane karty kredytowej: <input type="text" name="credit_card" required><br>
    E-mail: <input type="email" name="email" required><br>
    Data przyjazdu: <input type="date" name="arrival_date" required><br>
    Godzina przyjazdu: <input type="time" name="arrival_time" required><br>
    Łóżko dla dziecka: <input type="checkbox" name="child_bed"><br>

    Udogodnienia:
    <input type="checkbox" name="amenities[]" value="klimatyzacja"> Klimatyzacja
    <input type="checkbox" name="amenities[]" value="popielcznika"> Popielniczka dla palacza
    <br>

    <input type="submit" value="Rezerwuj">
</form>
</body>
</html>
