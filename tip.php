<?php 
//---------------- Magento 2 ----------------------
1, Call a static block in a .phtml file:

<?php 
//replace block_identifier with the identifier of the static block
echo $block->getLayout()->createBlock('Magento\Cms\Block\Block')->setBlockId('block_identifier')->toHtml();
?>

2, Call other .phtml block with specific template path

<?php 
echo $this->getLayout()
          ->createBlock('Magento\Framework\View\Element\Template')
          ->setTemplate('Webtoolmaker_Ishopdesign::sologan.phtml')
          ->toHtml();
?>