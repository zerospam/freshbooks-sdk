<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-09-26
 * Time: 13:34
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Presentation;

use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Framework\SDK\Utils\Data\ArrayableData;
use ZEROSPAM\Freshbooks\Response\Invoice\Presentation\PresentationResponse;

class PresentationData extends ArrayableData
{
    /**@var string|null* */
    private $dateFormat;
    /**@var int|null* */
    private $id;
    /**@var int|null* */
    private $imageBannerPosition_y;
    /**@var string|null* */
    private $imageBannerSrc;
    /**@var string|null* */
    private $imageLogoSrc;
    /**@var string|null* */
    private $themeFontName;
    /**@var string|null* */
    private $themeLayout;
    /**@var string|null* */
    private $themePrimaryColor;

    /**
     * @param null|string $dateFormat
     *
     * @return $this
     */
    public function setDateFormat(?string $dateFormat): PresentationData
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * @param int|null $id
     *
     * @return $this
     */
    public function setId(?int $id): PresentationData
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param int|null $imageBannerPosition_y
     *
     * @return $this
     */
    public function setImageBannerPositionY(?int $imageBannerPosition_y): PresentationData
    {
        $this->imageBannerPosition_y = $imageBannerPosition_y;

        return $this;
    }

    /**
     * @param null|string $imageBannerSrc
     *
     * @return $this
     */
    public function setImageBannerSrc(?string $imageBannerSrc): PresentationData
    {
        $this->imageBannerSrc = $imageBannerSrc;

        return $this;
    }

    /**
     * @param null|string $imageLogoSrc
     *
     * @return $this
     */
    public function setImageLogoSrc(?string $imageLogoSrc): PresentationData
    {
        $this->imageLogoSrc = $imageLogoSrc;

        return $this;
    }

    /**
     * @param null|string $themeFontName
     *
     * @return $this
     */
    public function setThemeFontName(?string $themeFontName): PresentationData
    {
        $this->themeFontName = $themeFontName;

        return $this;
    }

    /**
     * @param null|string $themeLayout
     *
     * @return $this
     */
    public function setThemeLayout(?string $themeLayout): PresentationData
    {
        $this->themeLayout = $themeLayout;

        return $this;
    }

    /**
     * @param null|string $themePrimaryColor
     *
     * @return $this
     */
    public function setThemePrimaryColor(?string $themePrimaryColor): PresentationData
    {
        $this->themePrimaryColor = $themePrimaryColor;

        return $this;
    }


    /**
     * @param IResponse $response
     *
     * @return static
     */
    public static function fromResponse(IResponse $response)
    {
        if (!$response instanceof PresentationResponse) {
            return parent::fromResponse($response);
        }
        /** @var PresentationData $data */
        $data = parent::fromResponse($response);
        $data->setId($response->invoiceid);

        return $data;
    }

    /**
     * @return string|null
     */
    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getImageBannerPositionY(): ?int
    {
        return $this->imageBannerPosition_y;
    }

    /**
     * @return string|null
     */
    public function getImageBannerSrc(): ?string
    {
        return $this->imageBannerSrc;
    }

    /**
     * @return string|null
     */
    public function getImageLogoSrc(): ?string
    {
        return $this->imageLogoSrc;
    }

    /**
     * @return string|null
     */
    public function getThemeFontName(): ?string
    {
        return $this->themeFontName;
    }

    /**
     * @return string|null
     */
    public function getThemeLayout(): ?string
    {
        return $this->themeLayout;
    }

    /**
     * @return string|null
     */
    public function getThemePrimaryColor(): ?string
    {
        return $this->themePrimaryColor;
    }
}
