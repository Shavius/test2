function hellow() {
    console.log('Hellow World', this);
};

let person = {
    'name': 'Joni',
    'age': 20,
    'sayHellow': hellow,
    'sayHellowWindow': hellow.bind(document),
    'logInfo': function () {
        console.group(`${this.name} info:`);
        console.log(`Name is ${this.name}`);
        console.log(`Age is ${this.age}`);
        console.group();
    }
};

// console.log(person);

// hellow();

// person.sayHellow();

// person.sayHellowWindow();

// person.logInfo();

let trianna = {
    'name': 'Trianna',
    'age': 30,
};

person.logInfo.bind(trianna)();
