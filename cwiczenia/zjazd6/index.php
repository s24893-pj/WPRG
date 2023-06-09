<!DOCTYPE html>
<html>
<head>
    <title>Samochody</title>
</head>
<body>

<?php
class NoweAuto {
    public $model;
    public $cenaEuro;
    public $kursEuroPLN;

    public function __construct($model, $cenaEuro, $kursEuroPLN) {
        $this->model = $model;
        $this->cenaEuro = $cenaEuro;
        $this->kursEuroPLN = $kursEuroPLN;
    }

    public function ObliczCene() {
        return $this->cenaEuro * $this->kursEuroPLN;
    }
}

class AutoZDodatkami extends NoweAuto {
    public $alarm;
    public $radio;
    public $klimatyzacja;

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }

    public function ObliczCene() {
        $cenaSamochodu = parent::ObliczCene();
        $cenaDodatkow = $this->alarm + $this->radio + $this->klimatyzacja;
        return $cenaSamochodu + $cenaDodatkow;
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    public $procentowaWartoscUbezpieczenia;
    public $liczbaLatPosiadania;

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja, $procentowaWartoscUbezpieczenia, $liczbaLatPosiadania) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja);
        $this->procentowaWartoscUbezpieczenia = $procentowaWartoscUbezpieczenia;
        $this->liczbaLatPosiadania = $liczbaLatPosiadania;
    }

    public function ObliczCene() {
        $cenaSamochoduZDodatkami = parent::ObliczCene();
        $wartoscUbezpieczenia = $this->procentowaWartoscUbezpieczenia * ($cenaSamochoduZDodatkami * ((100 - $this->liczbaLatPosiadania) / 100));
        return $wartoscUbezpieczenia;
    }
}

$auto = new NoweAuto("BMW", 50000, 4.5);
$autoZDodatkami = new AutoZDodatkami("Mercedes", 60000, 4.5, 1000, 500, 2000);
$ubezpieczenie = new Ubezpieczenie("Audi", 70000, 4.5, 1000, 500, 2000, 2.5, 3);
?>

<h1>Cena samochodu</h1>
<p>Model: <?php echo $auto->model; ?></p>
<p>Cena w Euro: <?php echo $auto->cenaEuro; ?></p>
<p>Kurs Euro/PLN: <?php echo $auto->kursEuroPLN; ?></p>
<p>Cena w PLN: <?php echo $auto->ObliczCene(); ?></p>

<h1>Cena samochodu z dodatkami</h1>
<p>Model: <?php echo $autoZDodatkami->model; ?></p>
<p>Cena w Euro: <?php echo $autoZDodatkami->cenaEuro; ?></p>
<p>Kurs Euro/PLN: <?php echo $autoZDodatkami->kursEuroPLN; ?></p>
<p>Dodatki: Alarm - <?php echo $autoZDodatkami->alarm; ?>, Radio - <?php echo $autoZDodatkami->radio; ?>, Klimatyzacja - <?php echo $autoZDodatkami->klimatyzacja; ?></p>
<p>Cena w PLN: <?php echo $autoZDodatkami->ObliczCene(); ?></p>

<h1>Wartość ubezpieczenia</h1>
<p>Model: <?php echo $ubezpieczenie->model; ?></p>
<p>Cena w Euro: <?php echo $ubezpieczenie->cenaEuro; ?></p>
<p>Kurs Euro/PLN: <?php echo $ubezpieczenie->kursEuroPLN; ?></p>
<p>Dodatki: Alarm - <?php echo $ubezpieczenie->alarm; ?>, Radio - <?php echo $ubezpieczenie->radio; ?>, Klimatyzacja - <?php echo $ubezpieczenie->klimatyzacja; ?></p>
<p>Procentowa wartość ubezpieczenia: <?php echo $ubezpieczenie->procentowaWartoscUbezpieczenia; ?></p>
<p>Liczba lat posiadania samochodu: <?php echo $ubezpieczenie->liczbaLatPosiadania; ?></p>
<p>Wartość ubezpieczenia w PLN: <?php echo $ubezpieczenie->ObliczCene(); ?></p>

</body>
</html>
