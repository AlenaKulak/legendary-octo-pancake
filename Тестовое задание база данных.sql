CREATE TABLE Product(
	Id_Prodict INT PRIMARY KEY,
	"Name_Product" TEXT
);

INSERT INTO Product (Id_Prodict, "Name_Product") 
VALUES (1, "Масло"), (2, "Кетчуп"), (3, "Дождевик");
SELECT * FROM Product;

CREATE TABLE Categoris(
	Id_Categoris INT PRIMARY KEY,
	"Name_Categoris" TEXT
);

INSERT INTO Categoris (Id_Categoris, "Name_Categoris") 
VALUES (1, "Продукты"), (2, "Соус"), (3, "Одежда");
SELECT * FROM Categoris;

CREATE TABLE Indexx(
	Product_Id INT FOREIGN KEY REFERENCES Product(Id_Prodict),
	Categoris_Id INT FOREIGN KEY REFERENCES Categoris(Id_Categoris),
	PRIMARY KEY (Product_Id, Categoris_Id)
);

INSERT INTO Indexx (Product_Id, Categoris_Id) 
VALUES (1, 1), (2, 1), (3, 3);
SELECT * FROM Indexx;

SELECT P."Name_Product", C."Name_Categoris"
FROM Product P
LEFT JOIN Indexx PC
	ON P.Id_Prodict = PC.Product_Id
LEFT JOIN Categories C
	ON PC.Name_Categoris = C.Id_Categoris;