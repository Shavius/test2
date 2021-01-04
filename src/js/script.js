function hellow() {
    console.log('Hellow World', this.age);
};

let person = {
    'name': 'Joni',
    'age': 20,
    'sayHellow': hellow,
    'sayHellowWindow': hellow.bind(window),
};

console.log(person);

hellow();

person.sayHellow();

person.sayHellowWindow();
