<?php

Class Poker {
    // Class constants
    const MAX_PLAYERS = 10;
    const MIN_PLAYERS = 2;

    // More Class variables
    protected $cards = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14);
    protected $suits = array('Hearts', 'Clubs', 'Spades', 'Diamonds');

    // More Game specific variables
    protected $deck = array();
    protected $deckClone = array(); // Emergency/Redeal
    protected $players = array();
    protected $playersHands = array();
    protected $flopToRiver = array();
    protected $pot = 0;
    protected $config = array(
        'min_bet' => 1,
        'max_bet' => 100,
        'blind' => 1
    );

    // Happens when you instantiate an object
    public function __construct($players = 2) {
        if ( ! is_array($players)) {
            throw new Exception('Please provide array of player names.');
        }

        $playerCount = count($players);

        if ($playerCount < Poker::MIN_PLAYERS AND $playerCount > Poker::MAX_PLAYERS) {
            throw new Exception("Please provide up to 10 players and no less than 2.");
        }

        $this->players = $players;
    }

    public function niceCardName($suit, $number) {
        $names = array(
            11 => 'Jack',
            12 => 'Queen',
            13 => 'King',
            14 => 'Ace'
        );

        $name = (isset($names[$number])) ? $names[$number] : $number;

        return $name . ' of ' . $suit;
    }

    public function buildDeck() {
        foreach ($this->suits as $suit) {
            foreach ($this->cards as $card) {
                $this->deck[] = array(
                    'suit' => $suit,
                    'card' => $card,
                    'human_name' => $this->niceCardName($suit, $card)
                );
            }
        }

        shuffle($this->deck);

        $this->deckClone = $this->deck;
    }

    public function dealTable() {
        $this->flopToRiver = $this->dealCards(3);
    }

    public function dealCards($number = 2) {
        $start = 0;
        $cards = array();

        foreach ($this->deck as $index => $arr) {
            if ($start == $number) {
                break;
            }

            $item = $arr;

            unset($this->deck[$index]); // Take this out of the deck. It's already random.

            $cards[] = $item;
            $start++;
        }

        return $cards;
    }

    public function deal() {
        foreach ($this->players as $player) {
            $this->playersHands[$player] = $this->dealCards(2);
        }
    }

    public function getPlayersHands() {
        return $this->playersHands;
    }

    public function getTableCards() {
        return $this->flopToRiver;
    }

    public function getPot() {

    }

    public function Bet($playerNum) {

    }
}

$p = new Poker(array('Bryan', 'Katie'));
$p->buildDeck();
$p->deal();
$p->dealTable();

// Start game would happen here... network based or whatever.
print_r($p->getPlayersHands());
print_r($p->getTableCards());

