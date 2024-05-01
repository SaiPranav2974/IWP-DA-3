<?xml version="1.0"?>
<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema">
    <xs:element name="food_order">
        <xs:complexType>
            <xs:sequence>
                <xs:element name="customer" type="customerType"/>
                <xs:element name="items" type="itemsType"/>
            </xs:sequence>
        </xs:complexType>
    </xs:element>
    
    <xs:complexType name="customerType">
        <xs:sequence>
            <xs:element name="name" type="xs:string"/>
            <xs:element name="address" type="xs:string"/>
            <xs:element name="email" type="xs:string"/>
        </xs:sequence>
    </xs:complexType>
    
    <xs:complexType name="itemsType">
        <xs:sequence>
            <xs:element name="item" maxOccurs="unbounded">
                <xs:complexType>
                    <xs:sequence>
                        <xs:element name="name" type="xs:string"/>
                        <xs:element name="quantity" type="xs:int"/>
                        <xs:element name="price" type="xs:decimal"/>
                    </xs:sequence>
                    <xs:attribute name="id" type="xs:string" use="required"/>
                </xs:complexType>
            </xs:element>
        </xs:sequence>
    </xs:complexType>
</xs:schema>
