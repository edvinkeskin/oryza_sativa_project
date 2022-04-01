----------------------------------- Logistics Manager
DROP TABLE LogisticsManager cascade constraints;
CREATE TABLE LogisticsManager (
    LM_ID CHAR(10),
    email CHAR(20),
    LM_rank CHAR(3) NOT NULL,            -- logically should be NOT NULL
    PRIMARY KEY (LM_ID),
    UNIQUE (email)
);

INSERT INTO LogisticsManager VALUES ('2087083800', 'ebonzai@dunder.com',    'L01');
INSERT INTO LogisticsManager VALUES ('3849282092',	'tsawyer@dunder.com',   'L01');
INSERT INTO LogisticsManager VALUES ('3925938284',	'olee@dunder.com',  	'L03');
INSERT INTO LogisticsManager VALUES ('9374037293',	'bob@dunder.com', 	    'L02');
INSERT INTO LogisticsManager VALUES ('9384058739',	'kcalls@dunder.com',	'L02');

------------------------------------- Rank Budget Map
DROP TABLE RankBudgetMap cascade constraints;
CREATE TABLE RankBudgetMap (
    LM_rank CHAR(3),
    budget REAL,
    PRIMARY KEY (LM_rank)
);

INSERT INTO RankBudgetMap VALUES ('L01',	15000000);
INSERT INTO RankBudgetMap VALUES ('L02',	10000000);
INSERT INTO RankBudgetMap VALUES ('L03',	5000000);
INSERT INTO RankBudgetMap VALUES ('L04',	2500000);
INSERT INTO RankBudgetMap VALUES ('L05',	1000000);

--------------------------------------- Worker
DROP TABLE Worker cascade constraints;
CREATE TABLE Worker (
    workerID CHAR(10),
    email CHAR(20),
    PRIMARY KEY (WorkerID),
    UNIQUE (email)
);

INSERT INTO Worker VALUES ('9587083800',	'worker1@dunder.com');
INSERT INTO Worker VALUES ('9389282092',	'worker2@dunder.com');
INSERT INTO Worker VALUES ('1205938284',	'worker3@dunder.com');
INSERT INTO Worker VALUES ('9084037293',	'rick@dunder.com');
INSERT INTO Worker VALUES ('5474058739',	'worker5@dunder.com');

--------------------------------------- Physical Warehouse
DROP TABLE PhysicalWarehouse cascade constraints;
CREATE TABLE PhysicalWarehouse (
    warehouse_number CHAR(10),
    physical_address CHAR(50),
    capacity INTEGER,
    PRIMARY KEY (warehouse_number),
    UNIQUE (physical_address)
);

INSERT INTO PhysicalWarehouse VALUES ('5839482098',	'2525 Heartbreak St Coquitlam',	3000);
INSERT INTO PhysicalWarehouse VALUES ('1295763207',	'5345 Dunbar Dr New West',	    2500);
INSERT INTO PhysicalWarehouse VALUES ('1274984743',	'1209 Freedom St Vancouver',	1250);
INSERT INTO PhysicalWarehouse VALUES ('6479381208',	'4236 Raymond Dr New West',	    5000);
INSERT INTO PhysicalWarehouse VALUES ('4632394839',	'1253 Allie St Surrey',	        1600);

--------------------------------------- Equipment Supplier
DROP TABLE EquipmentSupplier cascade constraints;
CREATE TABLE EquipmentSupplier (
    supplier_name CHAR(10),
    equipment_type CHAR(5),
    email CHAR(20),
    PRIMARY KEY (supplier_name),
    UNIQUE (email)
);

INSERT INTO EquipmentSupplier VALUES ('Mifflin',	    'COMPT',	'info@mifflin.com');
INSERT INTO EquipmentSupplier VALUES ('GoodStuff',	    'COMPT',	'goodstuff@gmail.com');
INSERT INTO EquipmentSupplier VALUES ('Canucks',	    'PERIP',	'info@canucks.com');
INSERT INTO EquipmentSupplier VALUES ('Bobs',	        'PERIP',	'products@bobs.com');
INSERT INTO EquipmentSupplier VALUES ('White Box',	    'COMPT',	'service@whitebox.com');

--------------------------------------- SuppliedBy
DROP TABLE SuppliedBy cascade constraints;
CREATE TABLE SuppliedBy (
    supplier_name CHAR(10),
    warehouse_number CHAR(10),
    PRIMARY KEY (supplier_name, warehouse_number),
    FOREIGN KEY (supplier_name) REFERENCES EquipmentSupplier ON DELETE CASCADE,
    FOREIGN KEY (warehouse_number) REFERENCES PhysicalWarehouse
);

INSERT INTO SuppliedBy VALUES('GoodStuff',	'1295763207');
INSERT INTO SuppliedBy VALUES('Canucks',	'5839482098');
INSERT INTO SuppliedBy VALUES('Bobs',	    '1295763207');
INSERT INTO SuppliedBy VALUES('White Box',	'4632394839');
INSERT INTO SuppliedBy VALUES('Mifflin',	'5839482098');
INSERT INTO SuppliedBy VALUES('Mifflin',	'1295763207');
INSERT INTO SuppliedBy VALUES('Mifflin',	'1274984743');
INSERT INTO SuppliedBy VALUES('Mifflin',	'6479381208');
INSERT INTO SuppliedBy VALUES('Mifflin',	'4632394839');


--------------------------------------- Inventory Has
DROP TABLE Inventory_HAS cascade constraints;
CREATE TABLE Inventory_HAS (
    warehouse_number CHAR(10),
    inventory_number CHAR(10), 
    PRIMARY KEY (inventory_number),
    FOREIGN KEY (warehouse_number) REFERENCES PhysicalWarehouse
);

INSERT INTO Inventory_HAS VALUES ('5839482098',	'7954999012');
INSERT INTO Inventory_HAS VALUES ('1295763207',	'3865444301');
INSERT INTO Inventory_HAS VALUES ('1295763207',	'6845749635');
INSERT INTO Inventory_HAS VALUES ('1295763207',	'5949504476');
INSERT INTO Inventory_HAS VALUES ('5839482098',	'1788690561');
INSERT INTO Inventory_HAS VALUES ('5839482098',	'7989678888');
INSERT INTO Inventory_HAS VALUES ('4632394839',	'7107925614');
INSERT INTO Inventory_HAS VALUES ('5839482098',	'6356025988');
INSERT INTO Inventory_HAS VALUES ('1295763207',	'2336442919');
INSERT INTO Inventory_HAS VALUES ('4632394839',	'1152727806');

--------------------------------------- Equipment_Stocks
DROP TABLE Equipment_Stocks cascade constraints;
CREATE TABLE Equipment_Stocks (
    serial_number CHAR(10),
    model_number CHAR(8),
    UPC_code CHAR(10),
    inventory_number CHAR(10) NOT NULL,
    PRIMARY KEY (serial_number),
    FOREIGN KEY (inventory_number) REFERENCES Inventory_HAS
);

INSERT INTO Equipment_Stocks VALUES ('SLW1828AB1',	'HP010K12',	'3958739508',	'7954999012');
INSERT INTO Equipment_Stocks VALUES ('SLW1828AB2',	'HP010K12',	'3958739508',	'7954999012');
INSERT INTO Equipment_Stocks VALUES ('SLW1828AB3',	'HP010K12',	'3958739508',	'7954999012');
INSERT INTO Equipment_Stocks VALUES ('SL392SB09D',	'MS120AB3',	'3820482906',	'3865444301');
INSERT INTO Equipment_Stocks VALUES ('SN4829AD12',	'KE3023EK',	'9403628593',	'6845749635');
INSERT INTO Equipment_Stocks VALUES ('SN98EB1AD2',	'LO400MJ1',	'4920357392',	'5949504476');
INSERT INTO Equipment_Stocks VALUES ('SN32KJ893B',	'PP44EB12',	'4830274028',	'1788690561');
INSERT INTO Equipment_Stocks VALUES ('KBP5JY94UR',	'1UNSMKT6',	'3449156552',	'7989678888');
INSERT INTO Equipment_Stocks VALUES ('J11NIJAW78',	'TNPOOW8Y',	'5420231209',	'7107925614');
INSERT INTO Equipment_Stocks VALUES ('L4UM5JBPNC',	'Z70X3OU3',	'7987949939',	'6356025988');
INSERT INTO Equipment_Stocks VALUES ('K9EFUN52CS',	'YM0W9ZLX',	'5007984949',	'2336442919');
INSERT INTO Equipment_Stocks VALUES ('YH7ZV4JHUD',	'THBT0D1X',	'4030739011',	'1152727806');

--------------------------------------- Model Number Brand Map
DROP TABLE ModelNumberBrandMap cascade constraints;
CREATE TABLE ModelNumberBrandMap (
    model_number CHAR(8),
    brand CHAR(10),
    PRIMARY KEY (model_number)
);

INSERT INTO ModelNumberBrandMap VALUES ('HP010K12',	'HP');
INSERT INTO ModelNumberBrandMap VALUES ('MS120AB3',	'MSI');
INSERT INTO ModelNumberBrandMap VALUES ('KE3023EK',	'LOGITECH');
INSERT INTO ModelNumberBrandMap VALUES ('LO400MJ1',	'LOGITECH');
INSERT INTO ModelNumberBrandMap VALUES ('PP44EB12',	'LENOVO');
INSERT INTO ModelNumberBrandMap VALUES ('1UNSMKT6',	'HP');
INSERT INTO ModelNumberBrandMap VALUES ('TNPOOW8Y',	'DELL');
INSERT INTO ModelNumberBrandMap VALUES ('Z70X3OU3',	'DELL');
INSERT INTO ModelNumberBrandMap VALUES ('YM0W9ZLX',	'CORSAIR');
INSERT INTO ModelNumberBrandMap VALUES ('THBT0D1X',	'CORSAIR');

--------------------------------------- Peripherals
DROP TABLE Peripherals cascade constraints;
CREATE TABLE Peripherals (
    serial_number CHAR(10),
    equipment_type CHAR(5) NOT NULL,         -- logically should be NOT NULL
    PRIMARY KEY (serial_number),
    FOREIGN KEY (serial_number) REFERENCES Equipment_Stocks
);

INSERT INTO Peripherals VALUES ('SLW1828AB1',	'MOUSE');
INSERT INTO Peripherals VALUES ('SLW1828AB2',	'MOUSE');
INSERT INTO Peripherals VALUES ('SLW1828AB3',	'MOUSE');
INSERT INTO Peripherals VALUES ('SL392SB09D',	'MONIT');
INSERT INTO Peripherals VALUES ('SN4829AD12',	'MOUSE');
INSERT INTO Peripherals VALUES ('SN98EB1AD2',	'KEYBD');
INSERT INTO Peripherals VALUES ('SN32KJ893B',	'MONIT');

--------------------------------------- Computers
DROP TABLE Computer cascade constraints;
CREATE TABLE Computer(
    serial_number CHAR(10),
    equipment_type CHAR(5) NOT NULL,         -- logically should be NOT NULL
    PRIMARY KEY (serial_number),
    FOREIGN KEY (serial_number) REFERENCES Equipment_Stocks 
);

INSERT INTO Computer VALUES ('KBP5JY94UR',	'DESKT');
INSERT INTO Computer VALUES ('J11NIJAW78',	'DESKT');
INSERT INTO Computer VALUES ('L4UM5JBPNC',	'LAPTP');
INSERT INTO Computer VALUES ('K9EFUN52CS',	'LAPTP');
INSERT INTO Computer VALUES ('YH7ZV4JHUD',	'DESKT');

--------------------------------------- Contracts
DROP TABLE Contracts cascade constraints;
CREATE TABLE Contracts (
    supplier_name CHAR(10),
    LM_ID CHAR(10),
    PRIMARY KEY (supplier_name, LM_ID),
    FOREIGN KEY (supplier_name) REFERENCES EquipmentSupplier ON DELETE CASCADE,
    FOREIGN KEY (LM_ID) REFERENCES LogisticsManager
);

INSERT INTO Contracts VALUES ('Mifflin',    '2087083800');
INSERT INTO Contracts VALUES ('GoodStuff',	'3849282092');
INSERT INTO Contracts VALUES ('Canucks',	'3925938284');
INSERT INTO Contracts VALUES ('Bobs',       '9374037293');
INSERT INTO Contracts VALUES ('White Box',  '9384058739');

--------------------------------------- Manages
DROP TABLE Manages cascade constraints;
CREATE TABLE Manages (
    LM_ID CHAR(10),
    warehouse_number CHAR(10),
    PRIMARY KEY (LM_ID),
    UNIQUE (warehouse_number),
    FOREIGN KEY (LM_ID) REFERENCES LogisticsManager,
    FOREIGN KEY (warehouse_number) REFERENCES PhysicalWarehouse
);

INSERT INTO Manages VALUES ('2087083800',	'5839482098');
INSERT INTO Manages VALUES ('3849282092',	'1295763207');
INSERT INTO Manages VALUES ('3925938284',	'1274984743');
INSERT INTO Manages VALUES ('9374037293',	'6479381208');
INSERT INTO Manages VALUES ('9384058739',	'4632394839');

--------------------------------------- Manages
DROP TABLE Uses cascade constraints;
CREATE TABLE Uses (
    serial_number CHAR(10),
    workerID CHAR(10) NOT NULL,             -- logically should be NOT NULL
    PRIMARY KEY (serial_number),
    FOREIGN KEY (serial_number) REFERENCES Equipment_Stocks ON DELETE CASCADE,
    FOREIGN KEY (workerID) REFERENCES Worker ON DELETE CASCADE
);

INSERT INTO Uses VALUES ('SN4829AD12',	'9587083800');
INSERT INTO Uses VALUES ('SN98EB1AD2',	'9389282092');
INSERT INTO Uses VALUES ('SN32KJ893B',	'1205938284');
INSERT INTO Uses VALUES ('KBP5JY94UR',	'9084037293');
INSERT INTO Uses VALUES ('J11NIJAW78',	'5474058739');

--------------------------------------- Requested Entity Requests
DROP TABLE RequestedEntity_Requests cascade constraints;
CREATE TABLE RequestedEntity_Requests (
    req_ID CHAR(10),
    equipment_type CHAR(5) NOT NULL,         -- logically should be NOT NULL
    workerID CHAR(10) NOT NULL,
    LM_ID CHAR(10) NOT NULL,
    PRIMARY KEY (req_ID),
    FOREIGN KEY (workerID) REFERENCES Worker,
    FOREIGN KEY (LM_ID) REFERENCES LogisticsManager
);

INSERT INTO RequestedEntity_Requests VALUES ('6992846030',	'COMPT',	'9587083800',	'2087083800');
INSERT INTO RequestedEntity_Requests VALUES ('3661162390',	'PERIP',	'9389282092',	'3849282092');
INSERT INTO RequestedEntity_Requests VALUES ('5899614510',	'PERIP',	'1205938284',	'3925938284');
INSERT INTO RequestedEntity_Requests VALUES ('9981474379',	'COMPT',	'9084037293',	'9374037293');
INSERT INTO RequestedEntity_Requests VALUES ('7193857385',	'PERIP',	'5474058739',	'9384058739');
