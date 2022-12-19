<?
 
    echo "Imię: $_GET[imie]
Nazwisko: $_GET[nazwisko]
Faktura: ";

    if ($_GET['faktura'] == 'on')
        echo 'Tak';
    else
        echo 'Nie';

    echo '
Zamówienie: ';

    switch ($_GET['zamow']) {
        case 'c':
            echo 'Coca-cola';
            break;
        case 'f':
            echo 'Fanta';
            break;
        case 's':
            echo 'Sprite';
            break;
    }

?>