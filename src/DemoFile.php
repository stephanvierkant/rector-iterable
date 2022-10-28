<?php

namespace App;

use Doctrine\Common\Collections\Collection;

final class DemoFile
{
    /** @var \Doctrine\Common\Collections\Collection<\App\UserSocialAccount> */
    private \Doctrine\Common\Collections\Collection $socialAccounts;

    public function __construct()
    {
        $this->socialAccounts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /** @return \Doctrine\Common\Collections\Collection<\App\UserSocialAccount> */
    public function getSocialAccounts() : \Doctrine\Common\Collections\Collection
    {
        return $this->socialAccounts;
    }
}
