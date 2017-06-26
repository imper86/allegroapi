<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetItemsImagesResponse
{

    /**
     * @var ArrayOfItemimagesstruct $get_items_images_result
     */
    protected $get_items_images_result = null;

    /**
     * @param ArrayOfItemimagesstruct $get_items_images_result
     */
    public function __construct($get_items_images_result = null)
    {
      $this->get_items_images_result = $get_items_images_result;
    }

    /**
     * @return ArrayOfItemimagesstruct
     */
    public function getGet_items_images_result()
    {
      return $this->get_items_images_result;
    }

    /**
     * @param ArrayOfItemimagesstruct $get_items_images_result
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemsImagesResponse
     */
    public function setGet_items_images_result($get_items_images_result)
    {
      $this->get_items_images_result = $get_items_images_result;
      return $this;
    }

}
