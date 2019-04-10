<?php
/**
 * Created by PhpStorm.
 * User: hayk1
 * Date: 06.04.2019
 * Time: 22:31
 */

class UserSessions extends Model
{
    public function __construct()
    {
        $table = 'user_sessions';
        parent::__construct($table);
    }

    public static function getFromCookie()
    {
        if (Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
            $userSession = new self();
            $userSession=$userSession->findFirst([
                'conditions' => "user_agent = ? AND session = ?",
                'bind' => [Session::uagent_no_version(), Cookie::get(REMEMBER_ME_COOKIE_NAME)]
            ]);
        }
        if (!$userSession) return false;
        return $userSession;
    }
}