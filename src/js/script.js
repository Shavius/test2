function hellow() {
    console.log('Hellow World', this.age);
};

let person = {
    'name': 'Joni',
    'age': 20,
    'sayHellow': hellow,
};

console.log(person);

hellow();

person.sayHellow();
