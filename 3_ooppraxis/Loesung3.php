<?php

/*
Mediadevice
- volume
  - lauter
  - leiser
  - muteToggle
 */

abstract class Mediadevice {
	const MAXVOLUME = 100;
	private $volume = 50;

	private $lastVolume = 0;
	private $isMuted = false;

	public function lauter()
	{
		if ($this->volume == self::MAXVOLUME) {
			return;
		}

		$this->volume++;
	}

	public function leiser()
	{
		if ($this->volume == 0) {
			return;
		}

		$this->volume--;
	}

	public function mute() {
		$this->lastVolume = $this->volume;
		$this->isMuted = !$this->isMuted;

		if ($this->isMuted) {
			$this->volume = 0;
		} else {
			$this->volume = $this->lastVolume;
		}
	}

	public function getVolume()
	{
		return sprintf("Volume: %d", $this->volume);
	}
}

/*
  Fernseher
  - aktuelles Programm
    - kanalPlus
    - kanalMinus
 */

class TV extends Mediadevice {
	const MAXCHANNEL = 100;
	private $channel = 0;

	public function __construct($channel)
	{
		$this->channel = $channel;
	}

	public function nextChannel()
	{
		if ($this->channel == self::MAXCHANNEL) {
			return;
		}

		$this->channel++;
	}

	public function prevChannel()
	{
		if ($this->channel == 0) {
			return;
		}

		$this->channel--;
	}

	public function getChannel()
	{
		return $this->channel;
	}
}

$tv = new TV(12);
$tv->nextChannel();
echo $tv->getChannel() . "<br>";


/*
iPod
- playlist
- aktuellerTitel
- play/pause
- next/prev
*/

class IPod extends Mediadevice {
	private $playlist = array();
	private $aktuellerTitel = 0;
	private $isPlaying = false;

	public function __construct($playlist)
	{
		$this->playlist = $playlist;
	}

	private function _playlistSize()
	{
		return count($this->playlist);
	}

	public function nextTitle()
	{
		// Titel: 3
		// Max Index: 2
		// kein next wenn aktuellerTitel = 2
		$maxIndex = $this->_playlistSize() - 1;
		if ($this->aktuellerTitel == $maxIndex) {
			return;
		}

		$this->aktuellerTitel++;
		$this->_announceTitle();
	}

	public function prevTitle()
	{
		if ($this->aktuellerTitel == 0) {
			return;
		}

		$this->aktuellerTitel--;
		$this->_announceTitle();
	}

	public function playPause()
	{
		$this->isPlaying = !$this->isPlaying;

		if ($this->isPlaying) {
			$this->_announceTitle();
		}
	}

	private function _announceTitle()
	{
		printf("Playing: %s<br>", $this->playlist[$this->aktuellerTitel]);
	}
}

$playlist = array(
	'KoRn - Got the life',
	'Hatebreed - Perseverance',
	'Buju Banton - Shiloh',
	'The Offspring - Self Esteem'
);
$ipod = new IPod($playlist);
$ipod->playPause();
$ipod->nextTitle();
