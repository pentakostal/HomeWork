<?php
class Video
{
    private string $title;
    //private float $rating;
    private int $checkedOutCounter = 0;
    private ?string $status;
    private ?float $rating;

    public const CHECKED_OUT = "checked out";
    public const CHECKED_IN = "in store";


    public function __construct(string $title, ?string $status = null, ?float $rating = null)
    {
        $this->title = $title;
        $this->status = $status;
        $this->rating = $rating;
    }

    public function checkedOut(): void
    {
        $this->status = Video::CHECKED_OUT;
        $this->checkedOutCounter++;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCheckedOutCounter(): int
    {
        return $this->checkedOutCounter;
    }

    public function returned(): void
    {
        $this->status = Video::CHECKED_IN;
    }

    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }
}
