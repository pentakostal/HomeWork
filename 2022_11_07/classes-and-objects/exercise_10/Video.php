<?php
class Video
{
    private string $title;
    private string $status;
    private int $checkedOutCounter = 0;

    private ?Video $rating;

    public const CHECKED_OUT = "checked out";
    public const CHECKED_IN = "checked in";


    public function __construct(string $title, string $status, ?Video $rating = null)
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

    public function getCheckedOutCounter(): int
    {
        return $this->checkedOutCounter;
    }

    public function returned(): void
    {
        $this->status = Video::CHECKED_IN;
    }

    public function receivRating($rating): void
    {
        $this->rating = ($rating + $this->rating) / 2;
    }
}