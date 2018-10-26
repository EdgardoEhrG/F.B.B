<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>TypeScript</title>

<link rel="shortcut icon" href="../Images/I/TS.png" type="image/x-icon">

<?php require_once('..\Links.html'); ?>

</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
        <a class="navbar-brand">TypeScript</a>
    </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../frontend.php"><i class="fa fa-undo" aria-hidden="true"></i> Back</a></li>

          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
              <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>

        </ul>
    </div>
  </div>
</div>

<!-- Panel -->

<div class="panel panel-warning" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">ЯП поверх JS</h3>
  </div>
    <div class="panel-body">

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-question-circle" aria-hidden="true"></i> Справка
</button>

<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Справка</h4>
      </div>
      <div class="modal-body">
        <p>
          <span class="v"><strong># Технологии</strong></span><br />
          <a href="https://ru.wikipedia.org/wiki/TypeScript">* TypeScript</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://www.typescriptlang.org/">* TypeScript Docs</a>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal3">
  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Заметки
</button>

<!-- Modal -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Заметки</h4>
      </div>
          <div class="modal-body">
            <p class="textblock">
              <i class="fa fa-plus-circle" aria-hidden="true"></i> Достоинства:<br />
              - Реализация ООП концепций.<br />
              - Строгая типизация данных<br />
              - Быстрота и простота написания сложных комплексных программ + их легкая поддержка, развитие, масштабирование и тестирование.<br />
              - Компиляция в JS.<br />
              - Обратно совместим с JS.<br />
              - Кроссплатформенность.<br />
              <br />

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - Расширение файлов - <strong>.ts</strong>
            </p>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        </div>
    </div>
  </div>
</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-success" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">Синтаксис</h3>
  </div>
    <div class="panel-body">

<!-- buttons -->

<button class="button" id="StrB">Структуры данных</button>
<button class="button" id="FunB">Функции</button>
<button class="button" id="PreB">Преобразования</button>

<!-- The Article -->

<div class="textblock" id="Str">
  <p>
    <em>============================ Структуры данных:</em><br />
      <span class="v"><strong># Переменные</strong></span><br />
      <span class="v3"><strong>let переменная: тип_данных = значение;</strong></span> - создание, задание типа данных и присвоение значения переменной.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Типы данных:<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Тип переменной нельзя динамически изменить (ошибка), тип также можно опустить, а если переменная определяется без значения - по умолчанию тип <strong>any</strong>.<br />
      <strong>number</strong> - числовой.<br />
      <strong>string</strong> - строка.<br />
      <strong>boolean</strong> - логический.<br />
      <strong>array</strong> - массив.<br />
      <strong>tuple</strong> - кортеж.<br />
      <strong>enum</strong> - перечисление.<br />
      <strong>any</strong> - произвольный тип (какой угодно). Подходит для динамической смены данных.<br />
      <strong>null</strong> - ничего.<br />
      <strong>undefined</strong> - не определена.<br />
      <strong>void</strong> - отсутствие конкретного типа.<br />
      <br />

      <span class="v3"><strong>typeof переменная</strong></span> - проверка на тип.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Объединение типов:<br />
      <span class="v3"><strong>let переменная: тип | тип_2;</strong></span> - позволяют переменной хранить значение нескольких типов (можно менять от одного типа к другому).<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Псевдонимы типов (контейнер типов данных):<br />
      <code>
        <strong>
          type имя = тип | тип_2;<br />
          let переменная: имя = значение;
        </strong>
      </code><br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Преобразование значения переменной к определенному типу:<br />
      <code>
        <strong>
          let a: string | number = "45";<br />
          let t = (s as string).length;<br />
          console.log(t); //2<br /><br />

          ... Или<br /><br />

          let a: any = "text";<br />
          let b: number = (&lt;string&gt;a.length);<br />
          console.log(b); //4
        </strong>
      </code><br />
      <br />

      <span class="v"><strong># Константы</strong></span><br />
      <span class="v3"><strong>const константа: тип_данных = значение;</strong></span> - создание, задание типа данных и присвоение значения константе.<br />
      <br />

      <span class="v"><strong># Шаблон строки</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Можно встраивать различные выражения<br />
      <span class="v3"><strong>let info: string = 'text { выражение }'</strong></span> - пример.<br />
      <br />

      <span class="v"><strong># Массивы</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Может содержать в себе элементы только одного типа данных, исключение - <strong>any</strong>.<br />
      <span class="v3"><strong>let имя: тип[] = [];</strong></span> - инициализация массива.<br />
      <br />

      <span class="v"><strong># Кортеж</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Набор элементов, для которых заранее известен тип (подвид массива).<br />
      <span class="v3"><strong>let имя: [тип, тип, ...]</strong></span> - инициализация кортежа (данные должны соответствовать позиции).<br />
      <br />

      <span class="v"><strong>#Тип enum</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Описание набора числовых данных с помощью строковых констант.<br />
      <code>
        <strong>
          enum переменная {имя1, имя2, имя3};<br />
          let переменная2: переменная = переменная.имя1;
        </strong>
      </code><br /><br />
      - По умолчанию <strong>имя1 = 0</strong>, <strong>имя2 = 1</strong> - все можно переопределить.<br />
      <br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fun">
  <p>
    <em>============================ Функции:</em><br />
      <code>
        <strong>
          function имя (аргумент: тип): тип* {<br />
            &nbsp;return ...<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> тип* - тип возвращаемого значения. <strong>void</strong> - если функция ничего не возвращает. Необязательный параметр.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> При вызове функции должно передаваться ровно столько значений, сколько в ней определено аргументов.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Необязательный параметр (следует после обязательных аргументов) - <strong>аргумент?: тип</strong><br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Значение по умолчанию - <strong>аргумент: тип = "значение" / значение / функция</strong><br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Неопределенный набор параметров (набор однотипных данных) - <strong>аргумент: тип[]</strong>
</div>

  <p>
    <span class="v"><strong># Тип функции</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Комбинация типов параметров и типа возвращаемого значения.<br />
    <code>
      <strong>
        function S(x: number, y: number): number {<br />
          &nbsp;return x + y;<br />
        }<br /><br />

        //тип<br />
        let p: (x:number, y: number) => number;<br />
        S = p;<br />
        console.log(p(2, 4)); //6
      </strong>
    </code><br /><br />

    <span class="v"><strong># Callback-функция</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Тип функции можно использовать как тип переменной, он также может применяться для определения типа другой функции.<br />
    <code>
      <strong>
        function L(x: number, y: number, operation: (a: number, b: number) = number): number {<br />
          &nbsp;let r = operation(x, y);<br />
          &nbsp;return r;<br />
        }<br /><br />

        let g: (x: number, y: number) => number;<br /><br />

        g = function(a: number, b: number): number {<br />
          &nbsp;return a + b;<br />
        }<br /><br />

        console.log(L(10, 20, g)); //30
      </strong>
    </code><br />
    <br />

    <span class="v"><strong># Arrow function</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Тип параметров можно опускать. Если одно выражение - можно без фигурных скобок.<br />
    <code>
      <strong>
        (аргумент: тип) => тело_функции;<br />
        <br />

        //пример<br /><br />

        let s = (x: number, y: number) => x + y;<br />
        let r = s(15, 35); //50
      </strong>
    </code><br />
    <br />

    <span class="v"><strong># Перегрузка функции</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Определение нескольких версий функции, которые имеют одно и то же имя, но разные типы
    параметров или разные типы возвращаемых значений.<br />
    <br />

    <code>
      <strong>
        fucntion имя(a: number, b: number): number;<br />
        function имя(a: string, b: string): string;<br />
        function имя(a: any, b: any): any {<br />
          &nbsp;тело_функции;<br />
        }
      </strong>
    </code>
  </p>

</div>

<!-- The Article -->

<div class="textblock" id="Pre">
  <p>
    <em>============================ Преобразования:</em><br />
      <span class="v"><strong># Обобщение</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Конкретизация возвращаемого типа:<br />
      <br />
      <code>
        <strong>
          function getID&lt;T&gt;(id: T): T {<br />
            &nbsp;return id;<br />
          }<br /><br />

          let r = getID&lt;number&gt;(5);
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-info" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">ООП</h3>
  </div>
    <div class="panel-body">

<!-- buttons -->

<button class="button2" id="ClB">Классы</button>
<button class="button2" id="NasB">Наследование</button>
<button class="button2" id="AbsB">Абстрактный класс</button>
<button class="button2" id="InterB">Интерфейсы</button>
<button class="button2" id="MixB">Миксины</button>
<button class="button2" id="ProB">Пространство имен</button>

<!-- The Article -->

<div class="textblock" id="Cl">
  <p>
    <em>============================ Классы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Шаблон для создания объектов. Инкапсулирует функциональность, которую
      должен иметь объект. Также определяет поведение и состояние, которыми обладает объект.<br />
      <br />

      <code>
        <strong>
          class имя {<br />
            &nbsp;свойство: тип;<br />
            &nbsp;метод(): тип {<br />
              &nbsp;&nbsp;return "свойство: " + this.свойство;&nbsp;<br />
            &nbsp;}<br />
          }<br /><br />

          let имя_объекта: имя_класса = new имя_класса();<br />
          имя_объекта.свойство = значение;
        </strong>
      </code><br /><br />

      <span class="v"><strong># Конструктор</strong></span><br />
      <code>
        <strong>
          class S {<br />
            &nbsp;id: number;<br />
            &nbsp;name: string;<br /><br />

            &nbsp;constructor(sId: number, sName: string) {<br />
              &nbsp;&nbsp;this.id = sId;<br />
              &nbsp;&nbsp;this.sName = sName;<br />
            &nbsp;}<br />
          }<br /><br />

          let tom: S = new S(1, "tom");
        </strong>
      </code><br /><br />

      <span class="v"><strong># Статические свойства / методы</strong></span><br />
      <code>
        <strong>
          class O {<br />
            &nbsp;static PI: number = 3.14;<br />
            &nbsp;static getSquare(radius: number): number {<br />
              &nbsp;&nbsp;return O.PI * radius * radius;<br />
            &nbsp;}<br />
          }<br /><br />

          let r = O.getSquare(30);
        </strong>
      </code><br /><br />

      <span class="v"><strong># Модификаторы доступа</strong></span><br />
      <span class="v3"><strong>public</strong></span> - полный доступ (стоит по умолчанию, если не указывать).<br />
      <span class="v3"><strong>protected</strong></span> - закрытый доступ, но можно обращаться из классов-наследников.<br />
      <span class="v3"><strong>private</strong></span> - закрытый доступ (использование только внутри класса).<br />
      <br />

      <span class="v3"><strong>readonly свойство: тип</strong></span> - определение свойства, которое доступно только для чтения. Его значение можно установить только в конструкторе класса.<br />
      <br />

      <code>
        <strong>
          class S {<br />
            &nbsp;спецификатор свойство: тип;<br />
          }
        </strong>
      </code><br /><br />

      <span class="v"><strong># Геттер / Сеттер</strong></span><br />
<code>
<pre>
<strong>
class User {
  private _name: string;

  public get name(): string {
    return this._name;
  }

  public set name(n: string) {
    this._name = n;
  }
}

let tom = new User();
tom.name = "Tom";   //set - контролирует установку значения
console.log(tom.name);   //get - вернет значение
</strong>
</pre>
</code>

      <br /><br />

      <span class="v"><strong># Принадлежность</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Проверка на принадлежность экземпляра класса к определенному классу:<br />
      <br />
      <code>
        <strong>if (object instanceof class) {...}</strong>
      </code>

</p>
</div>

<!-- The Article -->

<div class="textblock" id="Nas">
  <p>
    <em>============================ Наследование:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> При наследовании подкласс перенимает весь функционал родительского класса (все свойства и методы) и может их использовать.
      Также можно определить в подклассе новые свойства / методы, которых нет в родительском классе.<br />
<code>
<pre>
<strong>
// Родительский класс

class User {
  name: string;

  constructor(userName: string) {
    this.name = userName;
  }

  getInfo(): void {
    console.log("Name: " + this.name);
  }
}

// Подкласс

class Employee extends User {
  company: string;

  work(): void {
    console.log(this.name + " work in " + this.company);
  }
}

// Использование

let bill: Employee = new Employee("Bill");
bill.getInfo();
bill.company = "MS";
bill.work();

</strong>
</pre>
</code>

      <span class="v"><strong># Переопределение конструктора</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если подкласс определяет свой конструктор, то в нем должен быть вызван конструктор базового класса.
      А если нет переопределения, то все равно в подклассе писать <span class="v3"><strong>super()</strong></span>.<br />

<code>
<pre>
<strong>

constructor(userName: string, empComp: string) {
super(userName);
this.company = empComp;
}

let bill: Employee = new Employee("Bill", "MS");

</strong>
</pre>
</code>

  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Abs">
  <p>
    <em>============================ Абстрактный класс:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Описывают сущности, нельзя создать экземпляр такого типа класса. Насследуется классами. Может содержать абстрактные методы, которые не определяют никакой реализации.
      При наследовании производные классы обязаны реализовать все абстрактные методы.<br />
      <code>
        <strong>
          abstract class Figure {<br />
            &nbsp;...<br />
            <br />

            &nbsp;abstract метод(): void;<br />
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Inter">
  <p>
    <em>============================ Интерфейсы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Определяет свойства / методы, которые объект должен реализовать. Объект должен реализовать метод с тем же набором параметров и с тем же типом.<br />
      <br />
      <code>
        <strong>
          interface имя {<br />
            &nbsp;property: тип;<br />
            &nbsp;метод: имя(пар-р: тип): тип;<br />
          }<br /><br />

          let obj: имя = {<br />
            &nbsp;property: значение;<br />
          }
        </strong>
      </code><br /><br />

      <span class="v"><strong># Интерфейс классов</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Класс обязан определить все те же свойства / методы, которые есть в интерфейсе. При этом экземпляр класса будет также являться и объектом интерфейса.<br />
      <br />
      <code>
        <strong>
          class имя implements интерфейс {<br />
            &nbsp;...<br />
          }<br />
        </strong>
      </code><br />

      <span class="v"><strong># Наследование интерфейса</strong></span><br />
      <code>
        <strong>interface имя extends имя2</strong>
      </code><br /><br />

      <span class="v"><strong># Интерфейс функции</strong></span><br />
      <code>
        <strong>
          interface N {<br />
            &nbsp;(n: string, s: string): string;<br />
          }<br /><br />

          let f: N = function(n: string, s: string): string {<br />
            &nbsp;return ...<br />
          }<br />
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

<!-- The Article -->

<div class="textblock" id="Mix">
  <p>
    <em>============================ Миксины:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Миксины позволяют частично унаследовать свойства / методы сразу 2-х и более классов.<br />
      <br />

<code>
<pre>
<strong>

class Animal {
  feed(): void {
    console.log("Feed");
  }
}

class Transport {
  speed: number = 0;
  move(): void {
    if (this.speed == 0) {
      console.log("Stand");
    } else if (this.speed > 0) {
      console.log("Speed = " + this.speed);
    }
  }
}

class Horse implements Animal, Transport {
  speed: number = 0;
  feed: () => void;
  move: () => void;
}

function applyMixins(derivedCtor: any, baseCtors: any[]) {
  baseCtors.forEach(baseCtor => {
    Object.getOwnPropertyNames(baseCtor.prototype).forEach(name => {
      derivedCtor.prototype[name] = baseCtor.prototype[name];
    });
  });
}

applyMixins(Horse, [Animal, Transport]);

let pony: Horse = new Horse();
pony.feed();
pony.move();

</strong>
</pre>
</code>

  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Для наследования функционала классов в определении миксина-класса Horse применяется <strong>implements</strong>. Сам класс должен определить все те свойства / методы, которые определены в примененных классах. При этом полное описание не используется. Сама реализация
  будет браться из родительского класса.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Миксина может унаследовать только те свойства / методы, которые непосредственно определены в применяемом классе. Миксина не будет работать, если применяемый класс, также наследует какие-то свойства / методы от другого класса.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если родительские классы определяют методы с одинаковыми именами, то миксина наследует только тот метод, который копируется в него последним в вызове миксины.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Pro">
  <p>
    <em>============================ Пространство имен:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для организации больших apps, где группа классов, интерфейсы, функции могут использоваться в общем контексте.<br />
      <br />
      <code>
        <strong>
          namespace D {<br />
            &nbsp;export class E {<br />
              &nbsp;&nbsp;...<br />
            &nbsp;}<br />
          }<br /><br />

          import e = D.E;<br />
          let t = new e("...");<br />
        </strong>
      </code>
  </p>
</div>

</body>
</html>
