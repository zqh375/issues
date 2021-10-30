<?php


namespace Zqh\Hello;


class IssueOutputter
{

    public function output(array $issues)
    {
        echo "Issue {$issues['title']}\n";
    }

}