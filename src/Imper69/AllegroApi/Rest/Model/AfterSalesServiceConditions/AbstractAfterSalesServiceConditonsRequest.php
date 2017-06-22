<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 15:33
 */

namespace Imper69\AllegroApi\Rest\Model\AfterSalesServiceConditions;


use Imper69\AllegroApi\AccountInterface;
use Imper69\AllegroApi\Rest\Model\Http\RequestInterface;

abstract class AbstractAfterSalesServiceConditonsRequest implements RequestInterface
{
    /**
     * @var AccountInterface
     */
    private $account;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int
     */
    private $offset;


    public function __construct(AccountInterface $account, int $limit = null, int $offset = null)
    {
        $this->account = $account;
        $this->limit = $limit;
        $this->offset = $offset;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    abstract public function getUri(): string;

    public function getData(): array
    {
        return [
            'sellerId' => $this->account->getAllegroSellerId(),
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];
    }
}