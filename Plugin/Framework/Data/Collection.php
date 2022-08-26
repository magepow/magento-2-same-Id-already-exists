<?php
/**
 * @Author: nguyen
 * @Date:   2020-02-12 14:01:01
 * @Last Modified by:   nguyen
 * @Last Modified time: 2022-08-26 18:01:57
 */


namespace Magepow\SameIDAlreadyExists\Plugin\Framework\Data;

use Magento\Framework\Data\Collection\EntityFactoryInterface;
use Magento\Framework\Option\ArrayInterface;

/**
 * Data collection
 *
 * TODO: Refactor use of \Magento\Framework\Option\ArrayInterface in library.
 *
 * @api
 */
class Collection
{
    /**
     * Adding item to item array
     *
     * @param \Magento\Eav\Model\Entity\Collection\AbstractCollection $subject
     * @param \Closure $process
     * @param \Magento\Framework\DataObject $object
     * @return $this
     */
    public function aroundAddItem(\Magento\Eav\Model\Entity\Collection\AbstractCollection $subject, \Closure $process, \Magento\Framework\DataObject $object)
    {
        try{
            return $process($object);
        }catch ( \Exception $e){
            return $this;
        }

    }

}
