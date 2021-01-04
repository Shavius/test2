function hellow() {
    console.log('Hellow World', this);
};

let person = {
    'name': 'Joni',
    'age': 20,
    'sayHellow': hellow,
    'sayHellowWindow': hellow.bind(document),
};

// console.log(person);

// hellow();

// person.sayHellow();

person.sayHellowWindow();
