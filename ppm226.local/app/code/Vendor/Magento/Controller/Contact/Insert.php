<?php


namespace Vendor\Magento\Controller\Contact;
use Magento\Framework\Controller\ResultFactory;

class Insert extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;
    protected $jsonHelper;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\Json\Helper\Data $jsonHelper
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Json\Helper\Data $jsonHelper
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->jsonHelper = $jsonHelper;
        parent::__construct($context);
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {		
    	$resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $response = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $response->setHeader('Content-type', 'text/plain');
        $country = 'india';
        $state = 'gujarat';
        $response->setContents(
            $this->_jsonHelper->jsonEncode(
                [
                    'default_country' => $country,
                    'state' => $state,
                ]
            )
        );
        return $response;

        // try {
        //     return $this->jsonResponse('your response');
        // } catch (\Magento\Framework\Exception\LocalizedException $e) {
        //     return $this->jsonResponse($e->getMessage());
        // } catch (\Exception $e) {
        //     $this->logger->critical($e);
        //     return $this->jsonResponse($e->getMessage());
        // }
    }

    /**
     * Create json response
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function jsonResponse($response = '')
    {
        return $this->getResponse()->representJson(
            $this->jsonHelper->jsonEncode($response)
        );
    }
}
