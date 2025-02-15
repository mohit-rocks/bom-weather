<?php

declare(strict_types=1);

namespace BomWeather\Warning;

use BomWeather\Forecast\Area;

/**
 * A value object for weather warning.
 */
final class Warning {

  /**
   * The regions.
   *
   * @var \BomWeather\Forecast\Area[]
   */
  protected array $regions = [];

  /**
   * The districts.
   *
   * @var \BomWeather\Forecast\Area[]
   */
  protected array $districts = [];

  /**
   * The metropolitan areas.
   *
   * @var \BomWeather\Forecast\Area[]
   */
  protected array $metropolitanAreas = [];

  /**
   * The locations.
   *
   * @var \BomWeather\Forecast\Area[]
   */
  protected array $locations = [];

  /**
   * The coastal waters.
   *
   * @var \BomWeather\Forecast\Area[]
   */
  protected array $coasts = [];

  /**
   * The issue time.
   */
  protected \DateTimeImmutable $issueTime;

  /**
   * The warning information.
   */
  protected ?WarningInfo $warningInfo = NULL;

  /**
   * Gets the regions.
   *
   * @return \BomWeather\Forecast\Area[]
   *   The regions.
   */
  public function getRegions(): array {
    return $this->regions;
  }

  /**
   * Sets the regions.
   *
   * @param \BomWeather\Forecast\Area[] $regions
   *   The regions.
   *
   * @return $this
   */
  public function setRegions(array $regions): Warning {
    $this->regions = $regions;
    return $this;
  }

  /**
   * Adds a region.
   *
   * @param \BomWeather\Forecast\Area $region
   *   The region.
   *
   * @return $this
   */
  public function addRegion(Area $region): Warning {
    $this->regions[] = $region;
    return $this;
  }

  /**
   * Gets the districts.
   *
   * @return \BomWeather\Forecast\Area[]
   *   The districts.
   */
  public function getDistricts(): array {
    return $this->districts;
  }

  /**
   * Sets the districts.
   *
   * @param \BomWeather\Forecast\Area[] $districts
   *   The districts.
   *
   * @return $this
   */
  public function setDistricts(array $districts): Warning {
    $this->districts = $districts;
    return $this;
  }

  /**
   * Adds a district.
   *
   * @param \BomWeather\Forecast\Area $district
   *   The district.
   *
   * @return $this
   */
  public function addDistrict(Area $district): Warning {
    $this->districts[] = $district;
    return $this;
  }

  /**
   * Gets the metropolitan areas.
   *
   * @return \BomWeather\Forecast\Area[]
   *   The metropolitan areas.
   */
  public function getMetropolitanAreas(): array {
    return $this->metropolitanAreas;
  }

  /**
   * Sets the metropolitan areas.
   *
   * @param \BomWeather\Forecast\Area[] $metropolitanAreas
   *   The metropolitan areas.
   *
   * @return $this
   */
  public function setMetropolitanAreas(array $metropolitanAreas): Warning {
    $this->metropolitanAreas = $metropolitanAreas;
    return $this;
  }

  /**
   * Adds a metropolitan area.
   *
   * @param \BomWeather\Forecast\Area $metropolitanArea
   *   The metropolitan area.
   *
   * @return $this
   */
  public function addMetropolitanArea(Area $metropolitanArea): Warning {
    $this->metropolitanAreas[] = $metropolitanArea;
    return $this;
  }

  /**
   * Gets the locations.
   *
   * @return \BomWeather\Forecast\Area[]
   *   The locations.
   */
  public function getLocations(): array {
    return $this->locations;
  }

  /**
   * Sets the locations.
   *
   * @param \BomWeather\Forecast\Area[] $locations
   *   The locations.
   *
   * @return $this
   */
  public function setLocations(array $locations): Warning {
    $this->locations = $locations;
    return $this;
  }

  /**
   * Adds a location.
   *
   * @param \BomWeather\Forecast\Area $location
   *   The location.
   *
   * @return $this
   */
  public function addLocation(Area $location): Warning {
    $this->locations[] = $location;
    return $this;
  }

  /**
   * Gets the issue time.
   */
  public function getIssueTime(): ?\DateTimeImmutable {
    return $this->issueTime;
  }

  /**
   * Sets the issue time.
   */
  public function setIssueTime(\DateTimeImmutable $issueTime): Warning {
    $this->issueTime = $issueTime;
    return $this;
  }

  /**
   * Gets the coasts.
   *
   * @return \BomWeather\Forecast\Area[]
   *   The coasts.
   */
  public function getCoasts(): array {
    return $this->coasts;
  }

  /**
   * Sets the coasts.
   *
   * @param \BomWeather\Forecast\Area[] $coasts
   *   The coasts.
   *
   * @return $this
   */
  public function setCoasts(array $coasts): Warning {
    $this->coasts = $coasts;
    return $this;
  }

  /**
   * Adds a coast.
   *
   * @param \BomWeather\Forecast\Area $coast
   *   The coast.
   *
   * @return $this
   */
  public function addCoast(Area $coast): Warning {
    $this->coasts[] = $coast;
    return $this;
  }

  /**
   * Gets the warning information.
   */
  public function getWarningInfo(): ?WarningInfo {
    return $this->warningInfo;
  }

  /**
   * Sets the warning information.
   */
  public function setWarningInfo(?WarningInfo $warningInfo): Warning {
    $this->warningInfo = $warningInfo;
    return $this;
  }

}
