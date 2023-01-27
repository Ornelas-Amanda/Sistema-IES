<?php
spl_autoload('carregarClasse');

function caregarClasse($nomeClasse){
    if(file_exists('Classes/'.$nomeClasse.'.php')){
        require_once 'Classes/'.$nomeClasse. '.php';
    }
}
