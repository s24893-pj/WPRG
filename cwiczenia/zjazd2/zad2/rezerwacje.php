<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number_of_people = $_POST["number_of_people"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $address = $_POST["address"];
    $credit_card = $_POST["credit_card"];
    $email = $_POST["email"];
    $arrival_date = $_POST["arrival_date"];
    $arrival_time = $_POST["arrival_time"];
    $child_bed = isset($_POST["child_bed"]) ? "Tak" : "Nie";
    $amenities = isset($_POST["amenities"]) ? implode(", ", $_POST["amenities"]) : "Brak";

    echo "
            <h1>Podsumowanie rezerwacji</h1>
            <p>Imię: $first_name</p>
            <p>Nazwisko: $last_name</p>
            <p>Adres: $address</p>
            <p>E-mail: $email</p>
            <p>Data przyjazdu: $arrival_date</p>
            <p>Godzina przyjazdu: $arrival_time</p>
            <p>Łóżko dla dziecka: $child_bed</p>
            <p>Udogodnienia: $amenities</p>
        ";
}
