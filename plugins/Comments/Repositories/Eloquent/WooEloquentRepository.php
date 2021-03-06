<?php 

namespace Plugin\Comments\Repositories\Eloquent;

use Theme\Woo\Repositories\Woo\RepositoryInterface;

use Theme\Base\Repositories\Eloquent\EloquentRepository;
/**
* @return class name use repository
*/
class WooEloquentRepository extends EloquentRepository implements WooRepositoryInterface
{
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \Plugin\Comments\Entities\Woo::class;
    }

    
}