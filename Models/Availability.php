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
    public function setAvailability(int $quantity): void
    {
        if ($quantity == 0) {
            $this->availability = false;
        } else {
            $this->availability = true;
        }
    }
}
