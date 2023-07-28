# PHPUintTest

PHPUnit测试实例，包含各设计模式 

使用 composer 方式安装 PHPUnit：
> composer require phpunit/phpunit ^7

## 示例命令

> php vendor\bin\phpunit 20230101/ArrayTest.php

> vendor\bin\phpunit 20230103\ArrayWeakComparisonTest

> vendor\bin\phpunit 20230103

## 设计模式

### 创建型模式

#### 简单工厂模式(Simple Factory)

> vendor\bin\phpunit DesignPatterns\Creational\SimpleFactory\Tests

#### 静态工厂模式（Static Factory）

> vendor\bin\phpunit DesignPatterns\Creational\StaticFactory\Tests

#### 工厂方法模式(Factory Method)

> vendor\bin\phpunit DesignPatterns\Creational\FactoryMethod\Tests

#### 抽象工厂模式(Abstract Factory)

> vendor\bin\phpunit DesignPatterns\Creational\AbstractFactory\Tests

#### 建造者模式(Builder)

> vendor\bin\phpunit DesignPatterns\Creational\Builder\Tests

#### 单例模式(Singleton)

> vendor\bin\phpunit DesignPatterns\Creational\Singleton\Tests

#### 多例模式（Multiton）

> vendor\bin\phpunit DesignPatterns\Creational\Multiton\Tests

#### 原型模式(Prototype)

> vendor\bin\phpunit DesignPatterns\Creational\Prototype\Tests

#### 对象池模式（Object Pool）

> vendor\bin\phpunit DesignPatterns\Creational\ObjectPool\Tests

### 结构型模式

#### 适配器模式(Adapter)

> vendor\bin\phpunit DesignPatterns\Structural\Adapter\Tests

#### 组合模式（Composite）

> vendor\bin\phpunit DesignPatterns\Structural\Composite\Tests

#### 数据映射模式（Data Mapper）

> vendor\bin\phpunit DesignPatterns\Structural\DataMapper\Tests

#### 装饰器模式（Decorator）

> vendor\bin\phpunit DesignPatterns\Structural\Decorator\Tests

#### 依赖注入(Dependence Injection)

> vendor\bin\phpunit DesignPatterns\Structural\DependencyInjection\Tests

#### 门面模式（Facade）

> vendor\bin\phpunit DesignPatterns\Structural\Facade\Tests

#### 流接口模式（Fluent Interface）

> vendor\bin\phpunit DesignPatterns\Structural\FluentInterface\Tests

#### 代理模式（Proxy）

> vendor\bin\phpunit DesignPatterns\Structural\Proxy\Tests

#### 享元模式（Flyweight）

> vendor\bin\phpunit DesignPatterns\Structural\Flyweight\Tests

#### 注册模式（Registry）

> vendor\bin\phpunit DesignPatterns\Structural\Registry\Tests

### 行为型模式

#### 责任链模式（Chain Of Responsibilities）

> vendor\bin\phpunit DesignPatterns\Behavioral\ChainOfResponsibilities\Tests

#### 命令模式（Command）

> vendor\bin\phpunit DesignPatterns\Behavioral\Command\Tests

#### 迭代器模式（Iterator）

> vendor\bin\phpunit DesignPatterns\Behavioral\Iterator\Tests

#### 中介者模式（Mediator）

> vendor\bin\phpunit DesignPatterns\Behavioral\Mediator\Tests

#### 备忘录模式（Memento）

> vendor\bin\phpunit DesignPatterns\Behavioral\Memento\Tests

#### 空对象模式（Null Object）

> vendor\bin\phpunit DesignPatterns\Behavioral\NullObject\Tests

#### 观察者模式（Observer）

> vendor\bin\phpunit DesignPatterns\Behavioral\Observer\Tests

#### 规格模式（Specification）

> vendor\bin\phpunit DesignPatterns\Behavioral\Specification\Tests

#### 状态模式（State）

> vendor\bin\phpunit DesignPatterns\Behavioral\State\Tests

#### 模板方法模式（Template Method）

> vendor\bin\phpunit DesignPatterns\Behavioral\TemplateMethod\Tests

#### 访问者模式（Visitor）

> vendor\bin\phpunit DesignPatterns\Behavioral\Visitor\Tests

#### 解释器模式（Interpreter）

> vendor\bin\phpunit DesignPatterns\Behavioral\Interpreter\Tests

### 其他模式

#### 委托模式（Delegation）

> vendor\bin\phpunit DesignPatterns\More\Delegation\Tests

#### 资源库模式（Repository）

> vendor\bin\phpunit DesignPatterns\More\Repository\Tests

#### EAV模式

> vendor\bin\phpunit DesignPatterns\More\EAV\Tests

#### 服务定位器模式(Service Locator)

> vendor\bin\phpunit DesignPatterns\More\ServiceLocator\Tests



