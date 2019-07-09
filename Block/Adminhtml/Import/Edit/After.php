<?php

namespace Godogi\YoutubeVideoPopUp\Block\Adminhtml\Import\Edit;


class After extends \Magento\Backend\Block\Template
{
    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getSampleFileUrl(){
      return $this->getUrl('godogi_youtubevideopopup/index/sample');
    }
}
