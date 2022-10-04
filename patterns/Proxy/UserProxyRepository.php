<?php

declare(strict_types=1);

namespace RobotDreams\Patterns\Proxy;

class UserProxyRepository implements RepositoryInterface
{
    public function __construct(private UserRepository $userRepository = new UserRepository())
    {}

    public function create(array $data = [])
    {
        if ($this->isBannedEmail($data['email'])){
            echo $data['email'] . ' is banned' . "\n";
            return;
        }
        $this->userRepository->create($data);
    }

    public function isBannedEmail(string $email)
    {
        $bannedEmails = include __DIR__.'/banned_email.php';
        return in_array($email, $bannedEmails);
    }
}