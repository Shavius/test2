function hellow() {
    console.log('Hellow World', this);
};

let person = {
    'name': 'Joni',
    'age': 20,
    'sayHellow': hellow,
    'sayHellowWindow': hellow.bind(document),
    'logInfo': function () {
        console.log(`Name is ${this.name}`);
    }
};

// console.log(person);

// hellow();

// person.sayHellow();

// person.sayHellowWindow();

person.logInfo();
