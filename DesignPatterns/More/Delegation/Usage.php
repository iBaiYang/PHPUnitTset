<?php

namespace DesignPatterns\More\Delegation;

// 初始化 TeamLead 并委托辅助者 JuniorDeveloper
$teamLead = new TeamLead(new JuniorDeveloper());

// TeamLead 将编写代码的任务委托给 JuniorDeveloper
echo $teamLead->writeCode();