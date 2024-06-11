<?php

namespace Modules\Igamification\Repositories\Cache;

use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;
use Modules\Igamification\Repositories\ActivityRepository;

class CacheActivityDecorator extends BaseCacheCrudDecorator implements ActivityRepository
{
    public function __construct(ActivityRepository $activity)
    {
        parent::__construct();
        $this->entityName = 'igamification.activities';
        $this->repository = $activity;
    }

  public function bulkOrder($data, $params = false)
  {
      // TODO: Implement bulkOrder() method.
  }

  public function filterQuery($query, $filter, $params)
  {
      // TODO: Implement filterQuery() method.
  }

  public function syncModelRelations($model, $data)
  {
      // TODO: Implement syncModelRelations() method.
  }
}
