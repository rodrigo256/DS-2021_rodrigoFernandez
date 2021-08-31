from __future__ import annotations
from abc import ABC, abstractmethod
from random import randrange
from typing import List


class Subject(ABC):
    @abstractmethod
    def add(self, observer: Observer):
        pass

    @abstractmethod
    def delete(self, observer: Observer):
        pass

    @abstractmethod
    def notify(self):
        pass


class ConcreteSubject(Subject):
    _state: int = 0

    _observers: List[Observer] = []

    def add(self, observer: Observer):
        print("Sujeto: Tengo un nuevo observador.")
        self._observers.append(observer)

    def delete(self, observer: Observer):
        self._observers.remove(observer)

    def notify(self):
        print("Sujeto: Notificando a los observadores...")
        for observer in self._observers:
            observer.update(self)

    def any_logic(self):
        print("\nSujeto: Estoy haciendo algo importante.")
        self._state = randrange(0, 10)

        print(f"Sujeto: Mi estado acaba de cambiar a: {self._state}")
        self.notify()
        print(f"Cantidad de observadores: {len(subject._observers)}")


class Observer(ABC):
    @abstractmethod
    def update(self, subject: Subject):
        pass


class ConcreteObserverA(Observer):
    def update(self, subject: Subject):
        if subject._state < 3:
            print("El observador A: Reaccionó al evento")


class ConcreteObserverB(Observer):
    def update(self, subject: Subject):
        if subject._state == 0 or subject._state >= 2:
            print("El observador B: Reaccionó al evento")


class ConcreteObserverC(Observer):
    def update(self, subject: Subject):
        if subject._state >= 3:
            print("El observador C: Reaccionó al evento y se retiró")
            subject.delete(observer_c)


subject = ConcreteSubject()

observer_a = ConcreteObserverA()
subject.add(observer_a)

observer_b = ConcreteObserverB()
subject.add(observer_b)

observer_c = ConcreteObserverC()
subject.add(observer_c)

subject.any_logic()
subject.any_logic()

print("El observador A, se retiró")
subject.delete(observer_a)

subject.any_logic()
