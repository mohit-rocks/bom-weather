<?php

declare(strict_types = 1);

namespace BomWeather\Observation;

/**
 * A value object for pressure observations.
 */
final class Pressure {

  /**
   * The QNH pressure, in hectopascals.
   */
  protected ?int $qnh = NULL;

  /**
   * The mean sea level pressure, in hectopascals.
   */
  protected ?int $meanSeaLevel = NULL;

  /**
   * Factory method.
   */
  public static function create(): Pressure {
    return new Pressure();
  }

  /**
   * Gets the PressureQnh.
   */
  public function getQnh(): ?int {
    return $this->qnh;
  }

  /**
   * Sets the PressureQnh.
   */
  public function setQnh(int $qnh): Pressure {
    $this->qnh = $qnh;
    return $this;
  }

  /**
   * Gets the PressureMsl.
   */
  public function getMeanSeaLevel(): ?int {
    return $this->meanSeaLevel;
  }

  /**
   * Sets the PressureMsl.
   */
  public function setMeanSeaLevel(int $meanSeaLevel): Pressure {
    $this->meanSeaLevel = $meanSeaLevel;
    return $this;
  }

}
