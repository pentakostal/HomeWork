<?php
require_once 'Video.php';

class VideoStore
{
    private array $inventory = [];

    public function addVideo(string $title): void
    {
        $this->inventory[] = new Video($title);
    }

    public function checkOutStore(string $title): void
    {
        foreach ($this->inventory as $obj=>$video) {
            if ($video->getTitle() == $title) {
                $video->checkedOut();
            }
        }
    }

    public function returneToStore(string $title): void
    {
        foreach ($this->inventory as $obj=>$video) {
            if ($video->getTitle() == $title) {
                $video->returned();
            }
        }
    }

    public function signRating(string $title, float $rating = null): void
    {
        foreach ($this->inventory as $obj=>$video) {
            if ($video->getTitle() == $title) {
                $video->setRating($rating);
            }
        }
    }

    public function takeUsersRating(string $title, float $rating): void
    {
        foreach ($this->inventory as $obj=>$video) {
            if ($video->getTitle() == $title) {
                $video->rating = ($rating + $video->rating) / 2;
            }
        }
    }

    public function listVideo(): string
    {
        $list = [];
        foreach ($this->inventory as $obj=>$video) {
            $list[] = $video->getTitle() . " Status: " . $video->getStatus() . " Raiting is: " . $video->getRating();
        }
        return implode("\n", $list);
    }
}