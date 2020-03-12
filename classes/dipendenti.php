

<!-- Crea e modellizza classi per gestire i dipendenti di un’azienda. -->


<?php
  class dipendenteGenerale {
    private $id;
    private $cognome;
    private $nome;
    private $indirizzo;
    private $codiceFiscale;
    private $iban;
    private $occupazioneID;
    public function __construct($_id, $_cognome, $_nome, $_indirizzo, $_codiceFiscale, $_iban, $_occupazioneID)
    {
      $this->id = $_id
      $this->cognome = $_cognome
      $this->nome = $_nome
      $this->indirizzo = $_indirizzo
      $this->codiceFiscale = $_codiceFiscale
      $this->iban = $_iban
      $this->occupazioneID = $_occupazioneID
    }
    public function dipendenti()
    {
      $result =  [
        'cognome'=> $this->cognome,
        'nome'=> $this->nome,
      ]
    }
  }
