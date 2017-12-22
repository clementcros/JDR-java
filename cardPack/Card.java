package cardPack;

import java.util.*;


public abstract class Card {

/* Attributes */
	protected int id;
	protected String name;

	protected int life;
	protected int attack;
	protected int defense;
	protected int pa;
	protected bool isAlive;

/* Constructors */
	public Card() {
		this.id = -1;
		this.name = "";
		this.life = 100;
		this.attack = 10;
		this.defense = 100;
		this.pa = 10;
		this.isAlive = true;
	}

	public Card(int id, String name, int life, int attack, int defense, int pa) {
		this.id = id;
		this.name = name;
		this.life = life;
		this.attack = attack;
		this.defense = defense;
		this.pa = pa;
		this.isAlive = true;
	}

/* Methods */
	public void attack(Card target) {
		target.life -= this.attack;
		if (target.life < 0) {
			target.life = 0;
		}
	}

	public void regen(int regen) {
		this.life += regen;
	}

	public void checkIsAlive() {
		if (this.life <= 0) {
			this.isAlive = false;
		}
	}

/* Display */
	public void display() {
		System.out.println("Character " + this.name + " with id : " + this.id + "\n");
		System.out.println("Stats :");
		System.out.println(this.life + " hp");
		System.out.println(this.attack + " atk");
		System.out.println(this.defense + " def");
		System.out.println(this.pa + " ap\n");
	}

}