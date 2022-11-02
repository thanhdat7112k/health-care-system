package com.example.chatbotspring.data.entities;

import lombok.Getter;
import lombok.Setter;

import javax.persistence.Entity;
import javax.persistence.Table;

@Entity
@Table(name = "diseases")
@Setter
@Getter
public class Disease extends BaseEntity {
    private String diseaseName;
    private String description;
}