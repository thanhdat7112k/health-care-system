package com.example.chatbotspring.data.entities;

import lombok.Getter;
import lombok.Setter;

import javax.persistence.Entity;
import javax.persistence.Table;

@Entity
@Table(name = "symptoms")
@Getter
@Setter
public class Symptom extends BaseEntity {
    private String diseaseName;
    private String symptomName;
    private int weight;

}
