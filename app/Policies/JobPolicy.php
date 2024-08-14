<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;

class JobPolicy
{
  public function edit(User $user, Job $job)
  {
    return $user->is($job->employer->user);
  }
}
