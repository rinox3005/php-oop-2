<?php

trait Availability
{
    protected bool $availability;

    // Metodo getter
    public function getAvailability(): bool
    {
        return $this->availability;
    }

    // Metodo setter
    public function setAvailability(int $stock): void
    {
        if ($stock == 0) {
            $this->availability = false;
        } else if ($stock > 0) {
            $this->availability = true;
        } else {
            throw new Exception("The stock availability must be a positive number");
        }
    }
}
