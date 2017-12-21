//package treePack;

import java.util.*;


public class Node {

/* Main */
	public static void main(String arg[]) {

		Node arbre = new Node("root");

		Node n1 = new Node("set");
		Node n2 = new Node("get");
		arbre.addLeftNode(n1);
		arbre.addRightNode(n2);

		//n1 = new Node("perso");
		//n2 = new Node("mob");

		arbre.display(arbre);

	}

/* Attributes */
	private int id;
	private String key;
	private int length;
	private Node nodeLeft;
	private Node nodeRight;

/* Constructors */
	public Node() {
		System.out.println("create empty node\n");
		//TODO id
		this.key ="";
		this.length = 0;
		this.nodeLeft = null;
		this.nodeRight = null;
	}

	public Node(String k) {
		System.out.println("create empty node with key\n");
		//TODO id
		this.key = k;
		this.length = 0;
		this.nodeLeft = null;
		this.nodeRight = null;
	}

	public Node(String k, Node nL, Node nR) {
		System.out.println("create node with key\n");
		//TODO id
		this.key = k;
		this.length = 0;
		this.nodeLeft = nL;
		this.nodeRight = nR;
	}

/* Methods */
	public void addLeftNode(Node n) {
		this.nodeLeft = n;
		n.length++;
	}

	public void addRightNode(Node n) {
		this.nodeRight = n;
		n.length++;
	}

	public Node searchNode(Node n, String k) {
		if (n.key == k) {
			return n;
		} 
		if (n.nodeLeft != null) {
			return n.searchNode(nodeLeft, k);
		}
		if (n.nodeRight != null) {
			return n.searchNode(nodeRight, k);
		}
		return null;
	}

/* Getters and Setters */
	public String getKey() {
		return this.key;
	}

	public void setKey(String k) {
		this.key = k;
	}

	public int getLength() {
		return this.length;
	}

	public void setLength(int l) {
		this.length = l;
	}

/* Display */
	public void display(Node n) {
		System.out.println(n.key + " au niveau "+ n.getLength() + "\n");
		if (n.nodeLeft != null) {
			this.display(n.nodeLeft);
		}
		if (n.nodeRight != null) {
			this.display(n.nodeRight);
		}
	}

 }