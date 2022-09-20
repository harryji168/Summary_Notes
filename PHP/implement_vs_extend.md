https://stackoverflow.com/questions/4961906/when-to-implement-and-extend

Implement: Interfaces are abstract classes without implementation details, so you can only declare things(Contracts). A class implements an interface to make sure that it follows the interface's rules and contracts. A class can implement multiple interfaces.

Extend: You extend classes when you want a more specific version of a class. And also you don't want to repeat writing other methods that exist in the parent class.

Example:

// Contract: a pet should play
public interface Pet {
    public void play(); 
}

// An animal eats and sleeps
class Animal {
    public void eat(){ //details };
    public void sleep(){ //details };
}


public class Camel extends Animal {
    // no need to implement eat() and sleep() but
    // either of them can be implemented if needed. i.e. 
    // if Camel eats or sleeps diffrently from other animals!
}

public class Dog extends Animal implements Pet {    
    public void play() {
       // MUST implemt play() details           
    }
}
Both Camel and Dog are animals, so they extend Animal class. But only the Dog is a specific kind of Animal that also can be a Pet.

As you see this thread is closed because it's opinion-base there is no exact correct answer. It's a design choice and depends on the situation and project needs. you have both options available, now you can decide what is the best choice. for example dog class does not have to always be like in the above example, if the project is all about the different kind of dogs (and not other animals) and even their sleeping and eating difference is important! it can be like this:

// the main contract
public interface Dog {
   public void eat();
   public void sleep();
} 

// Contract
public interface Pet {
    public void play(); 
} 

// Contract
public interface Hunter {
    public void hunt();
}

public class FamilyDogs implements Dog, Pet {
    // must implement all details
} 

public class GuardDogs implements Dog, Hunter {    
    // must implement all details
}