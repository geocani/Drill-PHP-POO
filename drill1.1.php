

<!-- CLASS -->

<?php 

    class Form {

        public function openForm($action) {
            echo '<form action="' . $action . '" method="POST">';
        }

        public function inputText($name) {
            echo '<label>' . $name . '</label>' ;
            echo '<p><input type="text" name="' . $name . '"></p>';
        }

        public function select($pays) {
            echo '<select name="' . $pays . '">';
            echo '<option>Belgique</option>';
            echo '<option>France</option>';
            echo '</select><br>';
        }

        public function inputRadio($sexe){
            echo '<p><input type="radio" value="homme" name"' . $sexe . '">Homme</p>';
            echo '<p><input type="radio" value="femme" name"' . $sexe . '">Femme</p>';
        }

        public function inputCheck($sujet) {
            echo '<p><input type="checkbox" name="' . $sujet . '">Sujet 1</p>' ;
            echo '<p><input type="checkbox" name="' . $sujet . '">Sujet 2</p>' ;
        }

        public function textArea($message) {
            echo '<textarea name="' . $message . '"></textarea>';
        }

        public function submit() {
            echo '<p><button type="submit">Envoyer</button></p>';
        }

        public function closeForm() {
            echo '</form>';
        }
            
    }

?>

<!-- OBJET -->

<?php 

    $form = new Form();

    echo $form->openForm('drill1.1.php'); 
    echo $form->inputText('nom'); 
    echo $form->inputText('prenom'); 
    echo $form->inputRadio('sexe');
    echo $form->select('pays');
    echo $form->inputCheck('interet');
    echo $form->textArea('message');
    echo $form->submit('submit'); 
    echo $form->closeForm(); 

?>





